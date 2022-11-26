<?php
get_header();
$postDate = new DateTime(get_the_date());
?>
<main>
    <section class="single-news section-padding">
        <div class="container">
            <div class="single-news__grid">
                <div class="single-news__inner">
                    <?php

                    if (have_posts()) :

                        while (have_posts()) : the_post();
                            wpb_set_post_views(get_the_ID());
                    ?>
                            <div class="section-title-wrapper text-center">
                                <p class="section-title__subtitle">News</p>
                                <h1 class="section-title"><?php the_title() ?> <?php echo wpb_get_post_views(get_the_ID()) ?></h1>
                                <p class="section-title__description"><?php echo $postDate->format('F d, Y'); ?> </p>
                            </div>
                            <?php
                            ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="single-news__image-container">
                                    <img class="single-news__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
                                </div>
                            <?php endif; ?>

                            <div class="single-news__content">
                                <?php
                                the_content()
                                ?>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="readmore-news section-padding--bottom">
        <div class="container">
            <div class="section-title-wrapper text-center">
                <h2 class="section-title">
                    Read more News
                </h2>
            </div>
            <div class="readmore-news__grid">
                <?php
                $moreNews = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'post_status'   => 'publish',
                    'post__not_in'   => array(get_the_ID()),
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($moreNews->have_posts()) :
                    while ($moreNews->have_posts()) :
                        $moreNews->the_post();
                        if (has_post_thumbnail()) :
                            $ulrImagePost = get_the_post_thumbnail_url();
                        endif;

                        if (has_excerpt()) :
                            $postDescription = get_the_excerpt();

                        else :
                            $postDescription = wp_trim_words(get_the_content(), 18);
                        endif;
                        get_template_part('template-parts/components/cards/card', 'eight', array(
                            'card-eight-image' =>  $ulrImagePost,
                            'card-eight-title' => get_the_title()
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
</main>
<?php get_footer(); ?>