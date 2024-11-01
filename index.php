<?php
/**
 * @link              https://meobeo.net
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       ZWeb - Social Mobile
 * Plugin URI:        https://zweb.vn
 * Description:       Hiển thị nút gọi zalo, email, hotline trên máy tính và di động.
 * Version:           1.0.0
 * Author:            vithanhlam
 * Author URI:        https://zweb.vn
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
define( 'ZWEB_SOCIAL_MOBILE_VERSION', '1.0.0' );
define( 'ZWEB_SOCIAL_MOBILE_PLUGIN_URL', esc_url( plugins_url( '', __FILE__ ) ) );
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'zweb-social-mobile/include/zweb-admin.php';
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'zweb-social-mobile/include/zweb-function.php';