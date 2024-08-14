<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
        $top_header_flag = false;
        $top_header1 = $top_header2 = $top_header3 = false;
        $top_header_class1 = $top_header_class2 = $top_header_class3 = '';
        
        if (!empty(get_theme_mod("header_text_1"))) {
            $top_header_flag = true;
            $top_header1 = get_theme_mod("header_text_1");
            $top_header_class1 = "active";
        }
        if (!empty(get_theme_mod("header_text_2"))) {
            if (!$top_header_flag) {
                $top_header_class2 = "active";
            }
            $top_header_flag = true;
            $top_header2 = get_theme_mod("header_text_2");
        }
         if (!empty(get_theme_mod("header_text_3"))) {
            if (!$top_header_flag) {
                $top_header_class3 = "active";
            }
            $top_header_flag = true;
            $top_header3 = get_theme_mod("header_text_3");
        }

    ?>
    <div class="top-header">
        <?php if ($top_header1): ?>
        <p class="<?php echo $top_header_class1 ?>">
            <?php echo esc_html($top_header1); ?>
        </p>
        <?php endif; ?>
        <?php if ($top_header2): ?>
        <p class="<?php echo $top_header_class2 ?>">
            <?php echo esc_html($top_header2); ?>
        </p>
        <?php endif; ?>
        <?php if ($top_header3): ?>
        <p class="<?php echo $top_header_class3 ?>">
            <?php echo esc_html($top_header3); ?>
        </p>
        <?php endif; ?>
    </div>
    <header id="header">
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
            ));
            ?>
        </nav>
    </header>