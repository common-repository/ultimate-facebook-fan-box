<?php
/*
Plugin Name: Ultimate Facebook Fan Box
Plugin URI: http://www.picajob.com/index.php/ultimate-fanbox
Description:  Displays your FaceBook Fan page inside your WordPress Blog.
Version: 1.1
Author: Maddouri Nidhal
Author URI: http://www.picajob.com
Author Email: maddouri_nidhal@hotmail.fr
License:

  Copyright 2011 My Social Network (tom@tommcfarlin.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


class Ultimate_Facebook_Fan_Box    extends WP_Widget {

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/
	
	/**
	 * The widget constructor. Specifies the classname and description, instantiates
	 * the widget, loads localization files, and includes necessary scripts and
	 * styles.
	 */
	function Ultimate_Facebook_Fan_Box() {

    // Define constants used throughout the plugin
    $this->init_plugin_constants();
  
		$widget_opts = array (
			'classname' => PLUGIN_NAME, 
			'description' => PLUGIN_DESCRIPTION
		);	
		
		$this->WP_Widget(PLUGIN_SLUG, PLUGIN_NAME, $widget_opts);
		
    // Load JavaScript and stylesheets
    $this->register_scripts_and_styles();
		
	} // end constructor

	/*--------------------------------------------------*/
	/* API Functions
	/*--------------------------------------------------*/
	
	/**
	 * Outputs the content of the widget.
	 *
	 * @args			The array of form elements
	 * @instance
	 */
	function widget($args, $instance) {
	
		extract($args, EXTR_SKIP);
		
		echo $before_widget;
		
    // Display the widget
		include(WP_PLUGIN_DIR . '/' . PLUGIN_SLUG . '/views/widget.php');
		
		echo $after_widget;
		
	} // end widget
	
	/**
	 * Processes the widget's options to be saved.
	 *
	 * @new_instance	The previous instance of values before the update.
	 * @old_instance	The new instance of values to be generated via the update.
	 */
	function update($new_instance, $old_instance) {
		
		$instance = $old_instance;
		
    $instance['fanId'] = strip_tags(stripslashes($new_instance['fanId']));
    $instance['locale_lang'] = strip_tags(stripslashes($new_instance['locale_lang']));
    $instance['connections'] = strip_tags(stripslashes($new_instance['connections']));
    $instance['fanwidth'] = strip_tags(stripslashes($new_instance['fanwidth']));
    $instance['fanheight'] = strip_tags(stripslashes($new_instance['fanheight']));
    $instance['fanBoxColor'] = strip_tags(stripslashes($new_instance['fanBoxColor']));
    $instance['borderColor'] = strip_tags(stripslashes($new_instance['borderColor']));
    $instance['textShadow'] = strip_tags(stripslashes($new_instance['textShadow']));
    $instance['textColor'] = strip_tags(stripslashes($new_instance['textColor']));
    $instance['countFansSize'] = strip_tags(stripslashes($new_instance['countFansSize']));
    $instance['betweenImg'] = strip_tags(stripslashes($new_instance['betweenImg']));
    $instance['fanLinkColor'] = strip_tags(stripslashes($new_instance['fanLinkColor']));
    $instance['imgWidth'] = strip_tags(stripslashes($new_instance['imgWidth']));
  
		return $instance;
		
	} // end widget
	
	/**
	 * Generates the administration form for the widget.
	 *
	 * @instance	The array of keys and values for the widget.
	 */
	function form($instance) {
	
		$instance = wp_parse_args(
			(array)$instance,
			array(     
				'fanId' => '6427302910',
                'locale_lang' => '54',
                'connections' => '8' ,
                'fanwidth' => '240' ,  
                'fanheight' => '300' ,  
                'fanBoxColor' => '#FFFFFF' ,  
                'borderColor' => '#000000' ,  
                'textShadow' => '0' , 
                'textColor' => '#000000' , 
                'countFansSize' => '21' , 
                'betweenImg' => '16' , 
                'fanLinkColor' => '#000000' , 
                'imgWidth' => '40' 
			)
		);
    
    $fanId = strip_tags(stripslashes($new_instance['fanId']));
    $locale_lang = strip_tags(stripslashes($new_instance['locale_lang']));
    $connections = strip_tags(stripslashes($new_instance['connections']));
    $fanwidth = strip_tags(stripslashes($new_instance['fanwidth']));
    $fanheight = strip_tags(stripslashes($new_instance['fanheight']));
    $fanBoxColor = strip_tags(stripslashes($new_instance['fanBoxColor']));
    $borderColor = strip_tags(stripslashes($new_instance['borderColor']));
    $textShadow = strip_tags(stripslashes($new_instance['textShadow']));
    $textColor = strip_tags(stripslashes($new_instance['textColor']));
    $countFansSize = strip_tags(stripslashes($new_instance['countFansSize']));
    $betweenImg = strip_tags(stripslashes($new_instance['betweenImg']));
    $fanLinkColor = strip_tags(stripslashes($new_instance['fanLinkColor']));
    $imgWidth = strip_tags(stripslashes($new_instance['imgWidth']));
  
		// Display the admin form
    include(WP_PLUGIN_DIR . '/' . PLUGIN_SLUG . '/views/admin.php');
		
	} // end form
	
	/*--------------------------------------------------*/
	/* Private Functions
	/*--------------------------------------------------*/
	
  /**
   * Initializes constants used for convenience throughout 
   * the plugin.
   */
  private function init_plugin_constants() {

   
    if(!defined('PLUGIN_NAME')) {
      define('PLUGIN_NAME', 'Ultimate FaceBook Fan Box');
    } // end if

    if(!defined('PLUGIN_SLUG')) {
      define('PLUGIN_SLUG', 'ultimate-facebook-fan-box');
    } // end if
  
     if(!defined('PLUGIN_DESCRIPTION')) {
      define('PLUGIN_DESCRIPTION', 'Displays your FaceBook Fan page inside your WordPress Blog.');
    } // end if

  } // end init_plugin_constants
  
	/**
	 * Registers and enqueues stylesheets for the administration panel and the
	 * public facing site.
	 */
	private function register_scripts_and_styles() {
	   
            $this->load_file(PLUGIN_NAME, '/' . PLUGIN_SLUG . '/js/script.js', true);
			$this->load_file(PLUGIN_NAME, '/' . PLUGIN_SLUG . '/css/style.css');
		
	} // end register_scripts_and_styles

	/**
	 * Helper function for registering and enqueueing scripts and styles.
	 *
	 * @name	The 	ID to register with WordPress
	 * @file_path		The path to the actual file
	 * @is_script		Optional argument for if the incoming file_path is a JavaScript source file.
	 */
	private function load_file($name, $file_path, $is_script = false) {
		
    $url = WP_PLUGIN_URL . $file_path;
		$file = WP_PLUGIN_DIR . $file_path;
    
		if(file_exists($file)) {
			if($is_script) {
				wp_register_script($name, $url);
				wp_enqueue_script($name);
			} else {
				wp_register_style($name, $url);
				wp_enqueue_style($name);
			} // end if
		} // end if
    
	} // end load_file
	
} // end class
add_action('widgets_init', create_function('', 'register_widget("Ultimate_Facebook_Fan_Box");'));
?>