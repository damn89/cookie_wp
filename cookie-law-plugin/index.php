<?php

/*
	Plugin Name: cookie-law-plugin
	Description: Test plugin for cookies
	Author: Rickard
	Version: 0.0.1
 */


class Cookie_law
{
    static function init()
    {
        add_action('admin_enqueue_scripts', array(__CLASS__, 'script_admin'));
        add_action('wp_enqueue_scripts', array(__CLASS__, 'layout_styling'));
        add_shortcode('cookie_shortcode', array(__CLASS__, 'cookie_shortcode'));
        add_action('admin_menu', array(__CLASS__, 'cookie_law_menu'));
//        add_action('wp_ajax_cookie_law_ajax', array(__CLASS__, 'cookie_law_ajax'));
//        add_action('admin_footer', array(__CLASS__, 'add_ajax_script'));
    }

    static function script_admin()
    {
//        wp_enqueue_script('js-admin', plugin_dir_url(__FILE__) . 'js/main.js', array(), false, true);
    }

    static function layout_styling()
    {
        wp_enqueue_script('js-cookie', plugin_dir_url(__FILE__) . 'js/js.cookie.js', array('jquery'), false, true);
        wp_enqueue_script('js-frontend', plugin_dir_url(__FILE__) . 'js/frontend.js', array('jquery'), false, true);
        wp_enqueue_style('stylesheet', plugin_dir_url(__FILE__) . 'css/style.css');


    }

    static function cookie_shortcode()
    {
        include 'inc/cookie_law_frontend.php';
    }


    static function cookie_law_menu()
    {
        add_menu_page('Settings | cookie-law', 'Cookie Law', 'manage_options', 'cookie-law', array(__CLASS__, 'cookie_law_callback'));
    }

    static function cookie_law_callback()
    {
        include 'inc/cookie_law_admin.php';
    }

    static function add_ajax_script()
    {
        echo '<script type="text/javascript">var ajaxurl = "' . admin_url('admin-ajax.php') . '";</script>';
    }


    static function cookie_law_ajax()
    {
        if (DOING_AJAX) {
            echo $_POST['text_to_display'];
        }
        wp_die();
    }
}

Cookie_law::init();



