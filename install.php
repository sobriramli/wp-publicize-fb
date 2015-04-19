<?php
/**
 * Plugin Name: FB Auto-Share.
 * Plugin URI: http://web-berjaya.com
 * Description: Autoshare everytime we update a product on website.
 * Version: 2.0.1
 * Author: Sobri Ramli
 * Author URI: http://web-berjaya.com
 * License: GPL2
 */


add_action('init', 'kraft_woo_publicize');
function kraft_woo_publicize() {
  add_post_type_support( 'product', 'publicize' );
}

?>
