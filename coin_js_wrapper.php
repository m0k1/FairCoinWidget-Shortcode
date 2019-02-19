// A wrapper around the FairCoinWidget script "coin.js"
// coin.js depends on jQuery existing and being accessible as $ (doesn't work in Wordpress)
// This exposes $ as a variable and includes coin.js so as to make it work within Wordpress.

var CoinWidgetCom_Internal

(function($) {
<?php include("./faircoinwidget/coin.js")?>
CoinWidgetCom_Internal = CoinWidgetCom
})(jQuery);

CoinWidgetCom = CoinWidgetCom_Internal