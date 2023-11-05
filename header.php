<?php

/**
 * Header File
 * 
 * @package timedoor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Montserrat:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    if (is_page_template('page-wine.php')) {
        $header_two = '--two';
    } elseif (is_page_template('page-contact.php')) {
        $header_two = '--three';
    } elseif (is_page_template('page-people.php')) {
        $header_two = '--three';
    } elseif (is_page_template('page-blog.php')) {
        $header_two = '--two';
    } elseif (is_single()) {
        $header_two = '--two';
    } else {
        $header_two = '';
    }
    ?>
    <!-- PRE LOADER -->
    <div class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </div>
    <nav class="navbar-custom navbar-custom<?php echo $header_two ?> navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-custom__logo-container">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <button aria-label="navbar toggler" class="navbar-toggler navbar-custom__toggler" type="button">
                <span class="burger-wrapper">
                    <span id="hamburger" class="burger">
                        <svg width="45" height="45" viewBox="0 0 100 100">
                            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                            <path class="line line2" d="M 20,50 H 80" />
                            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                    </span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => ' ms-auto',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav%2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
        </div>
    </nav>