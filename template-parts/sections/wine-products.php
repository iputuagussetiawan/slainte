<?php
$pageWineID = get_field('wine_link', 'page_link')->ID;
$pageWineLink = get_permalink($pageWineID);
$behind_the_brand_title = get_field('page_wine_title', $pageWineID);
$behind_the_brand_description_ = get_field('page_wine_description', $pageWineID);
?>
<section class="wine-products">
    <div class="container section-padding">
        <div class="wine-products__grid">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 12,
                'post_type' => 'products',
                'post_status'   => 'publish',
                'paged'   => $paged
            );

            $products = new WP_Query($args);
            if ($products->have_posts()) :
                while ($products->have_posts()) :
                    $products->the_post();
                    $product_title = get_the_title();
                    $product_thumbnail = get_field('product_thumbnail');
                    $product_vintage = get_field('product_vintage');
                    $product_varietal = get_field('product_varietal');
                    $product_appellation = get_field('product_appellation');
                    $product_alcohol_percentage = get_field('product_alcohol_percentage');
                    if ($product_thumbnail) :
                        $urlProduct_thumbnail = $product_thumbnail['url'];
                    else :
                        $urlProduct_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                    endif;
                    if (has_excerpt()) :
                        $productsDescription = get_the_excerpt();
                    else :
                        $productsDescription = wp_trim_words(get_the_content(), 100);
                    endif;
                    get_template_part('template-parts/components/cards/card', 'product', array(
                        'card-product-image' =>   $urlProduct_thumbnail,
                        'card-product-title' =>  $product_title,
                        'card-product-description' =>  $productsDescription,
                        'card-product-vintage' =>   $product_vintage,
                        'card-product-varietal' =>   $product_varietal,
                        'card-product-appellation' =>   $product_appellation,
                        'card-product-alcohol-percentage' =>  $product_alcohol_percentage,
                    ));
                endwhile;
                wp_reset_postdata();
            else :
                get_template_part('template-parts/components/not', 'found');
            endif;
            ?>

        </div>
        <?php
        $pagination = paginate_links(array(
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $caseTudies->max_num_pages,
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