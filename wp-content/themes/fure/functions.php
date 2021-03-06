<?php

add_filter( 'wpcf7_autop_or_not', '__return_false' );

add_filter( 'bogo_use_flags','bogo_use_flags_false');

function bogo_use_flags_false(){
    return false;
}

add_filter( 'bogo_language_switcher','replace_bogo_text');

function replace_bogo_text($output){
    return str_replace('English','Eng', str_replace('Українська','Укр', str_replace('Русский','Ру', $output)));
}

add_action('plugins_loaded', 'theme_load_textdomain');

function theme_load_textdomain() {

    load_plugin_textdomain('fure', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );

}

if(function_exists('register_nav_menus')){
    register_nav_menus(
        array(
            'topmenu' => 'Главное меню',
            'language' => 'Переключатель языков',
            'menu-1' => 'Услуги',
            'menu-2' => 'Кухни',
            'menu-3' => 'Материалы',
            'top_menu' => 'Верхнее меню',
            'bottom_menu' => 'Нижнее меню',
            'foot_menu' => 'Меню в футере',
        )
    );
}

function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
    wp_enqueue_style( 'slick-style', get_theme_file_uri( '/js/libs/slick.css' ));
    wp_enqueue_style( 'slick-theme-style', get_theme_file_uri( '/js/libs/slick-theme.css' ));
    wp_enqueue_style( 'theme-main-style', get_theme_file_uri( '/css/style.css' ));
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
    wp_enqueue_style( 'font-style');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
    wp_enqueue_script( 'fure-jquery', get_theme_file_uri( '/js/libs/jquery-3.2.1.min.js' ), array(), '1', true );
    wp_enqueue_script( 'fure-slick', get_theme_file_uri( '/js/libs/slick.min.js' ), array(), '1', true );
    wp_enqueue_script( 'fure-priority-menu', get_theme_file_uri( '/js/script.js' ), array(), '1', true );

}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>