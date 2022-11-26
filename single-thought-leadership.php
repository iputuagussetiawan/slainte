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
                            $TLThumbnail = get_field('tl_thumbnail', get_the_ID());
                            if ($TLThumbnail) :
                                $urlTLThumbnail = $TLThumbnail['url'];
                            else :
                                $urlTLThumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                            endif;
                    ?>
                            <div class="section-title-wrapper text-center">
                                <p class="section-title__subtitle">Thought Leadership</p>
                                <h1 class="section-title"><?php the_title() ?> <?php echo wpb_get_post_views(get_the_ID()) ?></h1>
                                <p class="section-title__description"><?php echo $postDate->format('F d, Y'); ?> </p>
                            </div>
                            <?php
                            ?>

                            <div class="single-news__image-container">
                                <img class="single-news__image" src="<?php echo $urlTLThumbnail; ?>" alt="<?php the_title() ?>">
                            </div>


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
                    Read more Thought Leadership
                </h2>
            </div>
            <div class="readmore-news__grid">
                <?php
                $moreNews = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'thought-leadership',
                    'post_status'   => 'publish',
                    'post__not_in'   => array(get_the_ID()),
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($moreNews->have_posts()) :
                    while ($moreNews->have_posts()) :
                        $moreNews->the_post();
                        $TLThumbnail = get_field('tl_thumbnail');
                        if ($TLThumbnail) :
                            $urlTLThumbnail = $TLThumbnail['url'];
                        else :
                            $urlTLThumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;

                        if (has_excerpt()) :
                            $postDescription = get_the_excerpt();

                        else :
                            $postDescription = wp_trim_words(get_the_content(), 18);
                        endif;
                        get_template_part('template-parts/components/cards/card', 'eight', array(
                            'card-eight-image' =>  $urlTLThumbnail,
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