<?php
$pageHomeID = get_field('about_link', 'page_link')->ID;
$pageHomeLink = get_permalink($pageHomeID);
$phiTitle = get_field('home_welcome_title', $pageHomeID);
$phiSubtitle = get_field('home_welcome_subtitle', $pageHomeID);
$phiDescription = get_field('home_welcome_description', $pageHomeID);
?>
<section class="home-media section-padding">
    <div class="container-fluid">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h2 class="home-media__title">Media & Press</h2>
        </div>
        <div class="home-media__grid" data-aos="fade-up">
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'post',
                'post_status'   => 'publish',
            );
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
                        $postDescription = wp_trim_words(get_the_content(), 18);
                    endif;
                    get_template_part('template-parts/components/cards/card', 'one', array(
                        'card-one-image' =>  $ulrImagePost,
                        'card-one-title' => get_the_title()
                    ));
                endwhile;
                wp_reset_postdata();
            ?>
            <?php
            else :
            ?>
                <h3>Data Not Found</h3>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>