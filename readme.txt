=== FairCoinWidget Shortcode ===
Contributors: yuri
Donate link: http://notions.okuda.ca
Tags: coinwidget, faircoin
Requires at least: 3.0
Tested up to: 3.7.1
Stable tag: trunk
License: GPLv2 or later

Defines a shortcode for embeddeding the standard coinwidget button on your Wordpress blog.

== Description ==

This plugin adds the shortcode [coinwidget] to embed a faircoin.world FairCoin donation button.
See http://coinwidget.com.

To get public information about your FairCoin address it makes queries to https://chain.fair.to/address?address<your public FairCoin address>.

== Usage ==

Embed the short [coinwidget] anywhere in your posts or template to include a FairCoin button that, when clicked, will display a address for users to send FairCoins.

Supported attributes as documented here https://m0k1.pw/widget

* address - default ""
* currency - default "faircoin"
* counter - default "count"
* alignment - default "bl"
* qrcode - default "true" 
* auto_show - default "false"
* decimals - default "4"
* lbl_button - default "Donate"
* lbl_address - default "My FairCoin Address:"
* lbl_count - default "donations"
* lbl_amount - default "FAIR"

Example:

`[coinwidget
	address="fTSjheCjvTCHWkTqggn2bwyk13Cp32mvt2" currency="faircoin"
	counter="count" alignment="al" qrcode="false" auto_show="true"
	lbl_button="Press Me" lbl_address="Me Place" lbl_count="Gimme"
	lbl_amount="$$$"]`

== Installation ==

1. Download the plugin via WordPress.org
1. Includes the current master branch of FairCoinWidget in the "faircoinwidget" folder from here (https://github.com/m0k1.pw/FairCoinWidget-Shortcode/).  You should be able to upgrade to newer versions by replace the contents of that folder.
1. Include the shortcode anywhere in your posts or pages or template.  With the appropriate plugins you can also include shortcodes in sidebar widgets.

== Frequently Asked Questions ==

= I've installed the plugin - now what? =

Anywhere in a post or template (or sidebar widget if you have the appropriate plugins installed) you can include the text [coinwidget address="<your faircoin address>"] and it will be replaced with a button as seen on http://m0k1.pw/widget/code-sample.html .

== Screenshots ==

1. The FairCoinWidget button that how it will appear on the page
2. The expanded popup when the user clicks on the button.

== Changelog ==

= 2.0 = 
* 2018-02-19
* Update for FairCoin2  
* Remove old and not needed files  
* Rebranded to `fcwidget` from `coindwidget`  
* Updated screenshots  
* Forked and constatly maintained  
  
= 1.1 =
* 2014-01-16
* Fix for coinwidget.com issue #4 - https://github.com/scottycc/coinwidget.com/issues/4
* Replaced document.lastChild.firstChild.appendChild(x) with this document.body.appendChild(x)

= 1.0 =
* 2013-12-09
* Initial release

== Upgrade Notice ==

= 1.1 =
* 2014-01-16
* Fix for coinwidget.com issue #4 - https://github.com/scottycc/coinwidget.com/issues/4
