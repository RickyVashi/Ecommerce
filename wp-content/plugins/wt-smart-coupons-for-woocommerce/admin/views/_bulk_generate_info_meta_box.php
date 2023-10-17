<?php
if (!defined('WPINC')) {
    die;
}

/**
 * Bulk generate info html
 * 
 * @since 1.4.7
 * @since 1.4.9 Changed the content for Gift cards plugin.
 */

?>
<style type="text/css">
    #wt-sc-bulk-generate-info{ border:none; border-left:solid 3px #00a8ff; background:#edf8ff; font-size:14px; }
    #wt-sc-bulk-generate-info .postbox-header{ border:none; background:#edf8ff;}
    #wt-sc-bulk-generate-info .postbox-header h2{ display:none; }
    #wt-sc-bulk-generate-info .postbox-header .handle-actions{ display:none; }
    #wt-sc-bulk-generate-info .inside{ background:#edf8ff; padding:0px 30px; padding-bottom:20px; color:#434d54;}
</style>
<p>
  <?php esc_html_e('Create attractive gift cards for WooCommerce.', 'wt-smart-coupons-for-woocommerce');?>
  <?php echo sprintf(__('Get %s WebToffee WooCommerce Gift Cards%s plugin.', 'wt-smart-coupons-for-woocommerce'), '<a href="https://www.webtoffee.com/product/woocommerce-gift-cards/?utm_source=free_plugin_marketing_sidebar&utm_medium=smart_coupons_basic&utm_campaign=WooCommerce_Gift_Cards" target="_blank"><b>', '</b></a>'); ?> 
</p>