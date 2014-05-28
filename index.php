<?php
/*
Plugin Name: social share button
Plugin URI: http://kentothemes.com
Description: Social share buttons display on post or page or custom post.
Version: 1.0
Author: kentothemes
Author URI: http://kentothemes.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


require_once('themes/icons-body.php');
require_once('themes/icons-style.php');
define('ssb_plugin_path', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
function ssb_script()
	{
		wp_enqueue_script('jquery');
		wp_enqueue_style('ssb-style', ssb_plugin_path.'css/style.css');
		wp_enqueue_script('ssb-js', plugins_url( '/js/scripts.js' , __FILE__ ) , array( 'jquery' ));
		wp_localize_script( 'ssb-js', 'ssb_ajax', array( 'ssb_ajaxurl' => admin_url( 'admin-ajax.php')));
	}
add_action('init', 'ssb_script');



function ssb_ajax_form()
	{	
		$ssb_site = $_POST['ssb_site'];
		$post_id = $_POST['post_id'];
		// trace stats
		
		die();
	}



add_action('wp_ajax_ssb_ajax_form', 'ssb_ajax_form');
add_action('wp_ajax_nopriv_ssb_ajax_form', 'ssb_ajax_form');




function ssb_display($content)
	{
		$ssb_share_content_position = get_option( 'ssb_share_content_position' );
		$ssb_share_content_display = get_option( 'ssb_share_content_display' );	
		$content_new = "";
	
	if($ssb_share_content_position=='top')
		{
			$content_new.=ssb_share_icons();
			$content_new .=$content;
		}
	elseif($ssb_share_content_position=='bottom')
		{	
			$content_new .=$content;
			$content_new.=ssb_share_icons();
			
		}

	if($ssb_share_content_display=='yes')
		{
			return $content_new;
		}
	elseif($ssb_share_content_display=='no')
		{
			return $content;
		}
	else
		{
			return $content;
		}
	
	
	}

add_filter('the_content', 'ssb_display');



function ssb_share_icons()
	{	
		$ssb_share_content_themes = get_option( 'ssb_share_content_themes' );
		$ssb_share_content_icon_margin = get_option( 'ssb_share_content_icon_margin' );		

		$ssb_share_icons = "";
		$ssb_share_icons.="<div class='ssb-share ".$ssb_share_content_themes."' post_id='".get_the_ID()."' >";
		$ssb_share_icons.= ssb_share_body();
		$ssb_share_icons.="</div>";	
		

		return $ssb_share_icons;
	}



function ssb_share_get_url()
	{
		global $post;
		$permalink = get_permalink( $post->ID );
		
		return $permalink;	
	}



function ssb_share_get_image()
	{	global $post;
		if ( has_post_thumbnail())
			{
				$post_thumbnail_id = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ));
				$post_thumbnail_id = $post_thumbnail_id[0];
		 	}
		else
			{
				$post_thumbnail_id ="";
			}
		 
	return $post_thumbnail_id;	
	}














////////////////////////////////////////////////////////////

add_action('admin_init', 'ssb_options_init' );
add_action('admin_menu', 'ssb_menu_init');

function ssb_options_init(){
	register_setting('ssb_plugin_options', 'ssb_share_content_display');
	register_setting('ssb_plugin_options', 'ssb_share_content_themes');	
	register_setting('ssb_plugin_options', 'ssb_share_content_position');		
	register_setting('ssb_plugin_options', 'ssb_share_content_icon_margin');		

    }
	
function ssb_settings(){
	include('ssb-admin.php');	
}

function ssb_menu_init() {
	add_menu_page(__('ssb','ssb'), __('SSB Settings','ssb'), 'manage_options', 'ssb_settings', 'ssb_settings');

}



?>