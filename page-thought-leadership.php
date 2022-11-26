<?php
/*
    Template Name: Thought Leadership
*/
?>
<?php get_header(); ?>

<?php

if (isset($_GET['sortby'])) {
    if (!empty($_GET['sortby'])) {
        $sortby = $_GET['sortby'];
    } else {
        $sortby = 'latest';
    }
}
?>
<main>
    <section class="thought-leadership section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8">
                    <div class="section-title-wrapper">
                        <h1 class="section-title"><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="col-md-2 text-end">
                    <form id="frm-tl" action="<?php echo home_url($wp->request); ?>">
                        <select id="TLsortBy" name="sortby" class="form-select" aria-label="Default select example">
                            <option value="latest" <?php echo ($sortby == 'latest') ? 'selected' : ''; ?>>Latest</option>
                            <option value="popular" <?php echo ($sortby == 'popular') ? 'selected' : ''; ?>>Popular</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="thought-leadership__grid">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => 6,
                    'post_type' => 'thought-leadership',
                    'post_status'   => 'publish',
                    'paged'   => $paged
                );
                if ($sortby == 'popular') {
                    $args['orderby'] = 'meta_value';
                    $args['meta_key'] = 'wpb_post_views_count';
                    $args['order'] = 'desc';
                } else {
                    $args['orderby'] = 'date';
                    $args['meta_key'] = '';
                    $args['order'] = $orderBy;
                }
                $news = new WP_Query($args);
                if ($news->have_posts()) :
                    while ($news->have_posts()) :
                        $news->the_post();
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
            <?php
            $pagination = paginate_links(array(
                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $news->max_num_pages,
                'prev_text' => '<iconify-icon width="18" height="18" icon="ion:chevron-back" style="color: #404040;"></iconify-icon>',
                'next_text' => '<iconify-icon icon="ion:chevron-forward-outline" style="color: #404040;"></iconify-icon>',
                'type' => 'array',
                'show_all' => true
            ));
            ?>
            <?php if (!empty($pagination)) : ?>
                <nav class="navigation ">
                    <ul class="pagination post-pagination d-flex justify-content-center align-items-center">
                        <?php foreach ($pagination as $key => $page_link) : ?>
                            <li class="page-item
                        <?php
                            $link = htmlspecialchars($page_link);
                            $link = str_replace(' current', '', $link);
                            if (strpos($page_link, 'current') !== false) {
                                echo ' active';
                            }
                        ?>">
                                <?php
                                if ($link) {
                                    $link = str_replace('page-numbers', 'page-link', $link);
                                }
                                echo htmlspecialchars_decode($link);
                                ?>
                            </li>
                        <?php endforeach ?>

                    </ul>
                </nav>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>