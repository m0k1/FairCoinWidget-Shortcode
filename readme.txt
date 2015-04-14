=== Coinwidget Shortcode ===
Contributors: yuri
Donate link: http://notions.okuda.ca
Tags: coinwidget, faircoin
Requires at least: 3.0
Tested up to: 3.7.1
Stable tag: trunk
License: GPLv2 or later

Defines a shortcode for embeddeding the standard coinwidget button on your Wordpress blog.

== Description ==

This plugin adds the shortcode [coinwidget] to embed a coinwidget.com bitcoin donation button.
See http://coinwidget.com.

To get public information about your Bitcoin address it makes queries to http://blockchain.info/address/<your public bitcoin address>.
To get public information about your Litecoin address it makes queries to http://explorer.litecoin.net/address/<your public litecoin address>.

== Usage ==

Embed the short [coinwidget] anywhere in your posts or template to include a coinbase button that, when clicked, will display a address for users to send Bitcoins.

Supported attributes as documented here http://coinwidget.com/

* address - default ""
* currency - default "faircoin"
* counter - default "count"
* alignment - default "bl"
* qrcode - default "true" 
* auto_show - default "false"
* decimals - default "4"
* lbl_button - default "Donate"
* lbl_address - default "My Faircoin Address:"
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
1. Includes the current master branch of coinwidget.com in the "coinwidget.com" folder from here (https://github.com/yyuri/FairCoinWidget/).  You should be able to upgrade to newer versions by replace the contents of that folder.
1. Include the shortcode anywhere in your posts or pages or template.  With the appropriate plugins you can also include shortcodes in sidebar widgets.

== Frequently Asked Questions ==

= I've installed the plugin - now what? =

Anywhere in a post or template (or sidebar widget if you have the appropriate plugins installed) you can include the text [coinwidget address="<your faircoin address>"] and it will be replaced with a button as seen on http://coinwidget.com/.

== Screenshots ==

1. The coinwidget button that how it will appear on the page
2. The expanded popup when the user clicks on the button.

== Changelog ==

= 1.1 =
* 2014-01-16
* Fix for coinwidget.com issue #4 - https://github.com/scottycc/coinwidget.com/issues/4
*  Replaced document.lastChild.firstChild.appendChild(x) with this document.body.appendChild(x)

= 1.0 =
* 2013-12-09
* Initial release

== Upgrade Notice ==

= 1.1 =
* 2014-01-16
* Fix for coinwidget.com issue #4 - https://github.com/scottycc/coinwidget.com/issues/4
