<?php
/*
Plugin Name: Bit.ly Retweet
Plugin URI: http://playground.ebiene.de/2188/wordpress-tweet-this/
Description: Bit.ly Retweet is a fine, high-performance and careful resource plugin with internal cache for Bit.ly shorten links.
Author: Sergej M&uuml;ller
Version: 0.2
Author URI: http://www.wpSEO.org
*/


if (!function_exists('is_admin')) {
header('Status: 403 Forbidden');
header('HTTP/1.1 403 Forbidden');
exit();
}
if (!function_exists('save_tweet_link')) {
function save_tweet_link($id) {
if ($id) {
$url = wp_remote_retrieve_body(
wp_remote_get(
'http://bit.ly/api?url=' .get_permalink($id)
)
);
if (!$url) {
return sprintf(
'%s?p=%s',
get_bloginfo('url'),
$id
);
}
$url = str_replace(
'bit.ly',
'j.mp',
$url
);
add_post_meta(
$id,
'_tweet_trim_url',
$url
);
return $url;
}
}
}
if (!function_exists('the_tweet_link')) {
function the_tweet_link() {
if ($id = get_the_ID()) {
if (!$url = get_post_meta($id, '_tweet_trim_url', true)) {
$url = save_tweet_link($id);
}
echo sprintf(
'http://twitter.com/home?status=%s%s%s',
$url,
urlencode(' '),
urlencode(get_the_title())
);
}
}
}
?>