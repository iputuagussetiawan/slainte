<?php
$pageWineID = get_field('wine_link', 'page_link')->ID;
$pageWineLink = get_permalink($pageWineID);
$behind_the_brand_title = get_field('page_wine_title', $pageWineID);
$behind_the_brand_description_ = get_field('page_wine_description', $pageWineID);
?>
<section class="wine-products">
    <div class="container section-padding">
        <?php
            $args = array(
                'post_type' => 'products',
                'taxonomy'  => 'products-categories',
                'hide_empty' => false,
            );
            $categories = get_terms($args);
            foreach ($categories as $category) :
            ?>
            <h2 class="wine-products__category-title" data-aos="fade-up">
                <?php echo $category->name;?>
            </h2>
            <div class="wine-products__grid">
                <?php
                    
                    $postPrice = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'products',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'products-categories',
                                'terms' =>  $category->term_id,
                                'field' => 'term_id',
                            )
                        ),
                        'order' => 'ASC'
                    ));

                    if ($postPrice->have_posts()) :
                        while ($postPrice->have_posts()) :
                            $postPrice->the_post();
                            $product_title = get_the_title();
                            $product_thumbnail = get_field('product_thumbnail');
                            $product_color = get_field('product_color');
                            $product_aroma = get_field('product_aroma');
                            $product_flavour = get_field('product_flavour');
                            $product_alcohol_percentage = get_field('product_alcohol_percentage');
                            $product_cellaring = get_field('product_cellaring');
                            if ($product_thumbnail) :
                                $urlProduct_thumbnail = $product_thumbnail['url'];
                            else :
                                $urlProduct_thumbnail = get_template_directory_uri() . '/src/images/blank-bottle.webp';
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
                                'card-product-color' =>   $product_vintage,
                                'card-product-aroma' =>   $product_varietal,
                                'card-product-flavour' =>   $product_appellation,
                                'card-product-alcohol-percentage' =>  $product_alcohol_percentage,
                                'card-product-cellaring' =>  $product_cellaring,
                            ));
                        endwhile;
                        wp_reset_postdata();
                    else :
                        get_template_part('template-parts/components/not', 'found');
                    endif;
                    ?>
             </div>
            <?php 
                    
            endforeach;
            ?>
    </div>
</section>