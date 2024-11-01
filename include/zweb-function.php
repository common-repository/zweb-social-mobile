<?php
	function vithanhlam_zweb_social_mobile_plugin_register_settings() {
	   add_option( '_zweb_mobile_messager', '');
	   register_setting( 'mobile_options_group', 'vithanhlam_zsocial_save_messager');
	   
	   add_option( '_zweb_mobile_zalo', '');
	   register_setting( 'mobile_options_group', 'vithanhlam_zsocial_save_zalo');
	   
	   add_option( '_zweb_mobile_contact', '');
	   register_setting( 'mobile_options_group', 'vithanhlam_zsocial_save_contact');
	   
	   add_option( '_zweb_mobile_hotline', '');
	   register_setting( 'mobile_options_group', 'vithanhlam_zsocial_save_hotline');
	}
	add_action( 'admin_init', 'vithanhlam_zweb_social_mobile_plugin_register_settings' );
	///////////////////
	function vithanhlam_zweb_social_show_footer() {
	if ( wp_is_mobile() ) { ?>
		<style>
		.mobile_social {
			bottom: 0px;
			z-index: 99999999999;
			height: 90px;
			padding: 10px;
			color: #fff;
			position: fixed;
			background: #ffffffeb;
			font-size: 13px;
			width: 100%;
			font-weight: bold;
			line-height: 26px;
			box-shadow: 10px 10px 10px 11px #f7cece;
		}
		.col_social {
			flex-wrap: wrap;
			display: flex;
		}
		.icon_social {
			width: 25%;
			text-align: center;
			float: left;
			color: #000;
		}
		.icon_social img {
			width: 54px;
			border-radius: 10px;
			border: solid 1px #eee;
		}
		</style>
		<div id="social_nav" class="mobile_social">
			<div class="col_social">
			<div class="icon_social"><a target="_blank" href="http://zalo.me/<?php echo get_option('vithanhlam_zsocial_save_zalo'); ?>"><img src="<?php echo plugin_dir_url( __DIR__ ).'images/zalo.png'; ?>"></a><br>Zalo</div>
			<div class="icon_social"><a target="_blank" href="<?php echo get_option('vithanhlam_zsocial_save_messager');?>"><img src="<?php echo plugin_dir_url( __DIR__ ).'images/messager.png'; ?>"></a><br>Facebook</div>
			<div class="icon_social"><a href="tel:<?php echo get_option('vithanhlam_zsocial_save_hotline'); ?>"><img src="<?php echo plugin_dir_url( __DIR__ ).'images/hotline.png'; ?>"></a><br>Hotline</div>
			<div class="icon_social"><a target="_blank" href="mailto:<?php echo get_option('vithanhlam_zsocial_save_contact'); ?>"><img src="<?php echo plugin_dir_url( __DIR__ ).'images/contact.png'; ?>"></a><br>Email</div>

		</div>
		<script>
			var lastScrollTop = 0;
			jQuery(window).scroll(function(event){
			var st = jQuery(this).scrollTop();
			if (st > lastScrollTop){
				jQuery("#social_nav").hide();
			} else {
				jQuery("#social_nav").show();
			}
			lastScrollTop = st;
		});
		</script>
		<?php } else { ?>
			<style>
			div#social_nav_desktop {
				position: fixed;
				bottom: 200px;
				right: 10px;
				background: #fff;
				padding: 10px;
				border: solid 1px #fff2f2;
				border-radius: 5px;
			}
			div#social_nav_desktop img {
				width: 55px;
			}
			div#social_nav_desktop .icon_social {
				text-align: center;
				font-size: 13px;
				padding-bottom: 5px;
				border-bottom: solid 1px #eee;
				padding-top: 5px;
			}
			</style>
			<div id="social_nav_desktop">
					<div class="col_social">
					<div class="icon_social"><a target="_blank" href="http://zalo.me/<?php echo get_option('vithanhlam_zsocial_save_zalo'); ?>"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'images/zalo.png'; ?>"></a><br>Zalo</div>
					<div class="icon_social"><a target="_blank" href="<?php echo get_option('vithanhlam_zsocial_save_messager');?>"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'images/messager.png'; ?>"></a><br>Facebook</div>
					<div class="icon_social"><a title="Gọi Hotline : <?php echo get_option('vithanhlam_zsocial_save_hotline'); ?>" href="tel:<?php echo get_option('vithanhlam_zsocial_save_hotline'); ?>"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'images/hotline.png'; ?>"></a><br>Hotline</div>
					<div class="icon_social"><a title="<?php echo get_option('vithanhlam_zsocial_save_contact'); ?>" target="_blank" href="mailto:<?php echo get_option('vithanhlam_zsocial_save_contact'); ?>"><img src="<?php echo plugin_dir_url( __DIR__ ) . 'images/contact.png'; ?>"></a><br>Email</div>

				</div>
			<?php } 
	} 
	add_action('wp_footer','vithanhlam_zweb_social_show_footer'); /// Chèn thông tin xuống footer