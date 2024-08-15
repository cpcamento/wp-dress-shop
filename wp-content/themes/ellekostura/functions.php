<?php

class ElleKustoraTheme {

    public function __construct() {
        // Enqueue styles and scripts
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles_scripts'));
        
        // Register menus
        add_action('init', array($this, 'register_menus'));
        
        // AJAX load more products
        add_action('wp_ajax_load_more_products', array($this, 'load_more_products'));
        add_action('wp_ajax_nopriv_load_more_products', array($this, 'load_more_products'));
        
        // Customize register
        add_action('customize_register', array($this, 'elle_kustora_customize_register'));

        //Setup Theme
        add_action('after_setup_theme', array($this,'theme_setup'));
    }

    public function enqueue_styles_scripts() {
        wp_enqueue_style('style', get_stylesheet_uri());
        // BOOTSTRAP CSS
        wp_enqueue_style('materialize-style', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '1.0', 'all');
        // Theme script
        wp_enqueue_script('theme-script', get_template_directory_uri() . '/elle-kustora.js', array('jquery'), '1.0', true);
        // BOOTSTRAP JS
        wp_enqueue_script('materialize-script', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array(), '1.0', true);
        // Localize script with AJAX URL and nonce
        wp_localize_script('theme-script', 'ajax_object', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'query_vars' => "",
            'current_page' => 1,
            'nonce' => wp_create_nonce('load_products_nonce'),
        ));
    }

    public function register_menus() {
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'my-custom-theme'),
        ));
    }

    public function load_more_products() {
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 10,
            'paged' => $_POST['page'],
            // Add other query arguments here
        );
        
        $query = new WP_Query($args);
        
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                wc_get_template_part('content', 'product');
            endwhile;
        endif;
        
        wp_die();
    }

    public function theme_setup() {
        add_theme_support('custom-logo');
    }

   public function elle_kustora_customize_register($wp_customize) {
        // Header Section
        $wp_customize->add_section('header_section', array(
            'title'    => __('Elle Kustora - Top Header', 'elle_kustora'),
            'priority' => 30,
        ));
        
        // Multiple Fields
        for ($i = 1; $i <= 3; $i++) {
            $wp_customize->add_setting("header_text_$i", array(
                'default'   => "Default Header Text $i",
                'transport' => 'refresh',
            ));
        
            $wp_customize->add_control("header_text_{$i}_control", array(
                'label'    => __("Header Text $i", 'elle_kustora'),
                'section'  => 'header_section',
                'settings' => "header_text_$i",
                'type'     => 'text',
            ));
        }

        // Add a custom section for your custom logo if needed
        $wp_customize->add_section('elle_kustora_logo_section', array(
            'title'    => __('Elle Kustora - Logo', 'elle_kustora'),
            'priority' => 30,
        ));

        // Add a custom setting for the logo if you need it separately
        $wp_customize->add_setting('elle_kustora_logo', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        // Add a custom control for the logo
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'elle_kustora_logo', array(
            'label'    => __('Upload Logo', 'elle_kustora'),
            'section'  => 'elle_kustora_logo_section',
            'settings' => 'elle_kustora_logo',
        )));

    }

}

// Instantiate the class
new ElleKustoraTheme();
