=== Bit.ly Retweet ===
Contributors: stalkerX
Tags: Twitter, Retweet, Bit.ly, Tweet, Shortener
Requires at least: 2.7
Tested up to: 2.9.1
Stable tag: trunk

Bit.ly Retweet is a fine, high-performance and careful resource plugin with internal cache for Bit.ly shorten links.


== Description ==
*Bit.ly Retweet* is a fine, high-performance and careful resource plugin with internal cache for Bit.ly shorten links.


= Features =
* j.mp url support
* No database & settings necessary
* Store the short Bit.ly link in the WordPress cache


= Mode of operation =
Add the function code `<?php the_tweet_link() ?>` to the desired location in your `single.php` template.

= Example =
`<?php if (function_exists('the_tweet_link')) { ?>
  <a href="<?php the_tweet_link() ?>">ReTweet</a>
<?php } ?>`
Very simple.


= Documentation =
* [*Bit.ly Retweet* documentation in German](http://playground.ebiene.de/2188/wordpress-tweet-this/ "Bit.ly Retweet")
* [Follow us on Twitter for updates](http://twitter.com/wpSEO "wpSEO on Twitter")


== Changelog ==
= 0.2 =
* Convert bit.ly to j.mp url

= 0.1 =
* *Bit.ly Retweet* goes online


== Installation ==
1. Download plugin
1. Unzip the archive
1. Upload the folder *bitly-retweet* into *../wp-content/plugins/*
1. Go to tab *Plugins*
1. Activate *Bit.ly Retweet*
1. Ready


== Frequently Asked Questions ==
= Documentation =
* [*Bit.ly Retweet* documentation in German](http://playground.ebiene.de/2188/wordpress-tweet-this/ "Bit.ly Retweet")
* [Follow us on Twitter for updates](http://twitter.com/wpSEO "wpSEO on Twitter")