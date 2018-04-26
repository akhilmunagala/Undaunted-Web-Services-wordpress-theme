<?php

	function ubs_features(){
			register_nav_menu('navMenu', 'Nav Menu');
	}
	add_action('after_setup_theme','ubs_features');


	function files(){
		wp_enqueue_style('font-awesome_css','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('bootstrap_css',get_theme_file_uri('./css/bootstrap.min.css'));
		wp_enqueue_style('main',get_theme_file_uri().'./css/main.css');	
		wp_deregister_script('jquery'); 
		wp_enqueue_script('jquery',get_theme_file_uri('./js/jquery-3.3.1.min.js'),NULL,'1.0',true);
		wp_enqueue_script('nav-script',get_theme_file_uri('./js/script.js'),NULL,'1.0',true);
	}
	add_action('wp_enqueue_scripts','files');
?>