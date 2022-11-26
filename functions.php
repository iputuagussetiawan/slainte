<?php
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/function-acf.php';
require get_template_directory() . '/inc/frontend.php';
require get_template_directory() . '/inc/backend.php';
//require get_template_directory() . '/inc/polylang.php';

//register API

//Theme Assets
function tmdr_script_enqueue()
{
    $themeVersion = wp_get_theme()->get('Version');
    //css
    wp_enqueue_style('style', get_template_directory_uri() . '/build/css/app.css', array(), $themeVersion, 'all');
    //JS

    // wp_enqueue_script('jquery');//register jquery if you need
    wp_enqueue_script('app_js', get_template_directory_uri() . '/build/js/app.js', array(), $themeVersion, true);
    wp_enqueue_script('iconify_js', 'https://cdn.jsdelivr.net/npm/iconify-icon@1.0.1/dist/iconify-icon.min.js', array(), $themeVersion, true);

    if (is_page_template('page-home.php')) {
        wp_enqueue_style('home_css', get_template_directory_uri() . '/build/css/home.css', array(), $themeVersion, 'all');
        wp_enqueue_script('home_js', get_template_directory_uri() . '/build/js/home.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-our-approach.php')) {
        wp_enqueue_style('page-approach_css', get_template_directory_uri() . '/build/css/approach.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-approach_js', get_template_directory_uri() . '/build/js/approach.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-sourcetopay.php')) {
        wp_enqueue_style('page-sourcetopay-css', get_template_directory_uri() . '/build/css/sourcetopay.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-sourcetopay-js', get_template_directory_uri() . '/build/js/sourcetopay.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-elnvoicing.php')) {
        wp_enqueue_style('page-elnvoicing-css', get_template_directory_uri() . '/build/css/elnvoicing.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-elnvoicing-js', get_template_directory_uri() . '/build/js/elnvoicing.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-B2BeCommerce.php')) {
        wp_enqueue_style('page-B2BeCommerce-css', get_template_directory_uri() . '/build/css/b2becommerce.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-B2BeCommerce-js', get_template_directory_uri() . '/build/js/b2becommerce.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-news.php')) {
        wp_enqueue_style('page-news-css', get_template_directory_uri() . '/build/css/news.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-news-js', get_template_directory_uri() . '/build/js/news.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-case-studies.php')) {
        wp_enqueue_style('page-case-studies-css', get_template_directory_uri() . '/build/css/case-studies.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-case-studies-js', get_template_directory_uri() . '/build/js/case-studies.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-thought-leadership.php')) {
        wp_enqueue_style('page-thought-leadership-css', get_template_directory_uri() . '/build/css/thought-leadership.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-thought-leadership-js', get_template_directory_uri() . '/build/js/thought-leadership.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-about.php')) {
        wp_enqueue_style('page-about-css', get_template_directory_uri() . '/build/css/about.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-about-js', get_template_directory_uri() . '/build/js/about.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-contact.php')) {
        wp_enqueue_style('page-contact-css', get_template_directory_uri() . '/build/css/contact.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-contact-js', get_template_directory_uri() . '/build/js/contact.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-privacy-notice.php')) {
        wp_enqueue_style('page-privacy-notice-css', get_template_directory_uri() . '/build/css/privacy-notice.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page-privacy-notice-js', get_template_directory_uri() . '/build/js/privacy-notice.js', array(), $themeVersion, true);
    }

    if (is_single()) {
        wp_enqueue_style('single-css', get_template_directory_uri() . '/build/css/single.css', array(), $themeVersion, 'all');
        wp_enqueue_script('single-js', get_template_directory_uri() . '/build/js/single.js', array(), $themeVersion, true);
    }

    if (is_404()) {
        wp_enqueue_style('page404_css', get_template_directory_uri() . '/build/css/page404.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page404_js', get_template_directory_uri() . '/build/js/page404.js', array(), $themeVersion, true);
    }
}
add_action('wp_enqueue_scripts', 'tmdr_script_enqueue');

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

//fuction for hide super usery
add_action('pre_user_query', 'yoursite_pre_user_query');
function yoursite_pre_user_query($user_searchs)
{
    global $current_user;
    $username = $current_user->user_login;
    if ($username != 'timedoor') {
        global $wpdb;
    }
}

function wpb_set_post_views($postID)
{
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function wpb_get_post_views($postID)
{
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count . ' Views';
}
//To keep the count accurate, lets get rid of prefetching
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function update_counter_ajax()
{
    $postID = trim($_POST['post_id']);
    $count_key = 'download';
    $counter = get_post_meta($postID, $count_key, true);
    if ($counter == '') {
        $count = 1;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '1');
    } else {
        $counter++;
        update_post_meta($postID, $count_key, $counter);
    }
    wp_die();
}
add_action('wp_ajax_update_counter', 'update_counter_ajax');
add_action('wp_ajax_nopriv_update_counter', 'update_counter_ajax');




function GetYouTubeId($url)
{
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
    $youtube_id = $match[1];
    return $youtube_id;
}
