<?php
function vithanhlam_zweb_social_mobile_register_options_page() {
  add_options_page('ZWeb - Social Mobile', 'ZWeb - Social Mobile', 'manage_options', 'zweb_social_mobile', 'vithanhlam_zweb_social_mobile_options_page');
}
add_action('admin_menu', 'vithanhlam_zweb_social_mobile_register_options_page');
function vithanhlam_zweb_social_mobile_options_page() { ?>
  <div>
  <?php screen_icon(); ?>
  <h2>ZWeb - Mobile - Desktop</h2>
  <form method="post" action="options.php">
  <?php settings_fields( 'mobile_options_group' ); ?>
  <p class="alert">Cấu hình chung các social trên thiết bị di động giúp tương tác với khách hàng tốt hơn.</p>
  <table class="setting_zweb_mobile_desktop">
	
	<tr valign="top">
	  <th scope="row"><label for="myplugin_option_name">Facebook Messager </label></th>
	  <td><input type="text" id="myplugin_option_name" name="vithanhlam_zsocial_save_messager" value="<?php echo get_option('vithanhlam_zsocial_save_messager'); ?>" />
		<p class="description" id="home-description">Copy link chát messager dán vào đây</p>
	  </td>
	</tr>
	
	<tr valign="top">
	  <th scope="row"><label for="myplugin_option_name">Zalo Chát</label></th>
	  <td><input type="text" id="myplugin_option_name" name="vithanhlam_zsocial_save_zalo" value="<?php echo get_option('vithanhlam_zsocial_save_zalo'); ?>" />
		<p class="description" id="home-description">Nhập số điện thoại đăng ký Zalo viết liền không ký tự và khoảng trắng</p>
	  </td>
	</tr>
	
	<tr valign="top">
	  <th scope="row"><label for="myplugin_option_name">Hotline</label></th>
	  <td><input type="text" id="myplugin_option_name" name="vithanhlam_zsocial_save_hotline" value="<?php echo get_option('vithanhlam_zsocial_save_hotline'); ?>" />
		<p class="description" id="home-description">Nhập số điện thoại làm Hotline viết liền không ký tự và khoảng trắng</p>
	  </td>
	</tr>
	
	<tr valign="top">
	  <th scope="row"><label for="myplugin_option_name">Email</label></th>
	  <td><input type="text" id="myplugin_option_name" name="vithanhlam_zsocial_save_contact" value="<?php echo get_option('vithanhlam_zsocial_save_contact'); ?>" />
		<p class="description" id="home-description">Địa chỉ email</p>
	  </td>
	</tr>
  </table>
	<?php submit_button(); ?>
  </form>
  </div>
<?php }