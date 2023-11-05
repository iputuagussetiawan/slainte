<?php
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/function-acf.php';
require get_template_directory() . '/inc/frontend.php';
require get_template_directory() . '/inc/backend.php';
//require get_template_directory() . '/inc/polylang.php';

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

    if (is_page_template('page-wine.php')) {
        wp_enqueue_style('wine_css', get_template_directory_uri() . '/build/css/wine.css', array(), $themeVersion, 'all');
        wp_enqueue_script('wine_js', get_template_directory_uri() . '/build/js/wine.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-people.php')) {
        wp_enqueue_style('people_css', get_template_directory_uri() . '/build/css/people.css', array(), $themeVersion, 'all');
        wp_enqueue_script('people_js', get_template_directory_uri() . '/build/js/people.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-winemaker.php')) {
        wp_enqueue_style('winemaker_css', get_template_directory_uri() . '/build/css/winemaker.css', array(), $themeVersion, 'all');
        wp_enqueue_script('winemaker_js', get_template_directory_uri() . '/build/js/winemaker.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-about.php')) {
        wp_enqueue_style('about_css', get_template_directory_uri() . '/build/css/about.css', array(), $themeVersion, 'all');
        wp_enqueue_script('about_js', get_template_directory_uri() . '/build/js/about.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-contact.php')) {
        wp_enqueue_style('contact_css', get_template_directory_uri() . '/build/css/contact.css', array(), $themeVersion, 'all');
        wp_enqueue_script('locationmap_js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDfGcaDJ1vOSxuxARS_kOVEmN-SOxVfIBw', array(), $themeVersion, true);
        wp_enqueue_script('contact_js', get_template_directory_uri() . '/build/js/contact.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-blog.php')) {
        wp_enqueue_style('blog_css', get_template_directory_uri() . '/build/css/blog.css', array(), $themeVersion, 'all');
        wp_enqueue_script('blog_js', get_template_directory_uri() . '/build/js/blog.js', array(), $themeVersion, true);
    }

    if (is_404()) {
        wp_enqueue_style('page404_css', get_template_directory_uri() . '/build/css/page404.css', array(), $themeVersion, 'all');
        wp_enqueue_script('page404_js', get_template_directory_uri() . '/build/js/page404.js', array(), $themeVersion, true);
    }

    if (is_single()) {
        wp_enqueue_style('single-css', get_template_directory_uri() . '/build/css/single.css', array(), $themeVersion, 'all');
        // wp_enqueue_script('single-js', get_template_directory_uri() . '/build/js/single.js', array(), $themeVersion, true);
    }

    wp_localize_script('contact_js', 'locationData', array(
        'theme_url' => get_template_directory_uri(),
        'dataLocation' => json_encode(getLocation()),
    ));
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


function getLocation()
{
    $locationDataArray = [];
    $locationData = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'location',
        'post_status'   => 'publish',
        'orderby' => 'date',
        'order' => 'ASC',
    ));
    while ($locationData->have_posts()) :
        $locationData->the_post();
        $locationID = get_the_ID();
        $locationName = get_the_title();
        $locationAddress = get_field('location_address');
        $locationLat = get_field('location_lat');
        $locationLang = get_field('location_lang');
        $locationImage = get_field('map_image');
        $urlLocationImage = '';
        if ($locationImage) :
            $urlLocationImage  = $locationImage['url'];
        endif;
        $dataLocation = array(
            'propertyID' =>  $locationID,
            'locationName' => $locationName,
            'locationAddress' => $locationAddress,
            'locationLat' => (int)$locationLat,
            'locationLang' => (int)$locationLang,
            'coord' => array(
                'lat' => (float)$locationLat,
                'lng' => (float)$locationLang
            ),
            'content' => '<div class="card-map-location"><div class="card-map-location__info-container"><h4 class="card-map-location__title">' . $locationName . '</h4><p class="card-map-location__description">' . $locationAddress . '</p></div><img class="card-map-location__image" src="' . $urlLocationImage . '"></div>',
            'iconImage' =>  $urlLocationImage
        );
        array_push($locationDataArray, $dataLocation);
    endwhile;
    return $locationDataArray;
}

add_action('init', 'getLocation');

add_filter('wpcf7_autop_or_not', '__return_false');
