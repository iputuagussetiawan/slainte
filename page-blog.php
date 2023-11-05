<?php
/*
    Template Name: Blog
*/
?>
<?php get_header(); ?>
<main>
    <section class="blog section-padding">
        <div class="container">
            <div class="blog__grid">
                <div class="blog__wrapper">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'post_status'   => 'publish',
                        'paged'   => $paged
                    );
                    // if ($sortby == 'popular') {
                    //     $args['orderby'] = 'meta_value';
                    //     $args['meta_key'] = 'wpb_post_views_count';
                    //     $args['order'] = 'desc';
                    // } else {
                    //     $args['orderby'] = 'date';
                    //     $args['meta_key'] = '';
                    //     $args['order'] = 'desc';
                    // }
                    $news = new WP_Query($args);
                    if ($news->have_posts()) :
                        while ($news->have_posts()) :
                            $news->the_post();
                            if (has_post_thumbnail()) :
                                $ulrImagePost = get_the_post_thumbnail_url();
                            endif;

                            if (has_excerpt()) :
                                $postDescription = get_the_excerpt();

                            else :
                                $postDescription = wp_trim_words(get_the_content(), 100);
                            endif;

                            //$newsDate = new DateTime(get_the_date());

                            get_template_part('template-parts/components/cards/card', 'post-big', array(
                                'card-image' => $ulrImagePost,
                                'card-title' => get_the_title(),
                                'card-description' => $postDescription,
                            ));

                        // the_title();
                        // echo get_the_date('l F j, Y');

                        endwhile;
                        wp_reset_postdata();
                    else :
                        get_template_part('template-parts/data', 'not-found');
                    endif;
                    ?>
                </div>
                <div class="blog__sidebar">
                    <h3 class="blog__sidebar-title">
                        Popular Articles
                    </h3>
                    <div class="blog__sidebar-wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'post',
                            'post_status'   => 'publish',
                            'paged'   => $paged
                        );
                        // if ($sortby == 'popular') {
                        //     $args['orderby'] = 'meta_value';
                        //     $args['meta_key'] = 'wpb_post_views_count';
                        //     $args['order'] = 'desc';
                        // } else {
                        //     $args['orderby'] = 'date';
                        //     $args['meta_key'] = '';
                        //     $args['order'] = 'desc';
                        // }
                        $news = new WP_Query($args);
                        if ($news->have_posts()) :
                            while ($news->have_posts()) :
                                $news->the_post();
                                if (has_post_thumbnail()) :
                                    $ulrImagePost = get_the_post_thumbnail_url();
                                endif;

                                if (has_excerpt()) :
                                    $postDescription = get_the_excerpt();

                                else :
                                    $postDescription = wp_trim_words(get_the_content(), 100);
                                endif;

                                //$newsDate = new DateTime(get_the_date());

                                get_template_part('template-parts/components/cards/card', 'post', array(
                                    'card-image' => $ulrImagePost,
                                    'card-title' => get_the_title(),
                                    'card-description' => $postDescription,
                                ));

                            // the_title();
                            // echo get_the_date('l F j, Y');

                            endwhile;
                            wp_reset_postdata();
                        else :
                            get_template_part('template-parts/data', 'not-found');
                        endif;
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>