<?php
/*
    Template Name: B2BeCommerce
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/sections/page', 'header');
    ?>
    <section class="howitwork section-padding">
        <div class="container">
            <div class="section-title-wrapper text-center">
                <h2 class="section-title text-white">How It Works</h2>
            </div>

            <div class="howitwork__grid">
                <?php
                if (have_rows('how_it_works_list', $pageElnvoicingID)) :
                    while (have_rows('how_it_works_list', $pageElnvoicingID)) : the_row();
                        $hiw_image = get_sub_field('how_it_works_image');
                        $hiw_description = get_sub_field('how_it_works_description');
                        $hiw_step = get_sub_field('how_it_works_image_step');
                        if ($hiw_image) :
                            // Image variables.
                            $urlhiw_image = $hiw_image['url'];
                        else :
                            $urlhiw_image = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;
                        get_template_part('template-parts/components/cards/card', 'six', array(
                            'card-six-image' =>  $urlhiw_image,
                            'card-six-description' => $hiw_description,
                            'card-six-step' => $hiw_step
                        ));
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="benefits section-padding">
        <div class="container">
            <div class="section-title-wrapper text-center">
                <h2 class="section-title">Key Benefits for you</h2>
            </div>
            <div class="benefits__grid">
                <?php
                if (have_rows('key_benefits_for_you_list', $pageElnvoicingID)) :
                    while (have_rows('key_benefits_for_you_list', $pageElnvoicingID)) : the_row();
                        $key_benefits_fu_image = get_sub_field('key_benefit_image');
                        $key_benefits_fu_title = get_sub_field('key_benefits_title');
                        $key_benefits_fu_description = get_sub_field('key_benefits_description');

                        if ($key_benefits_fu_image) :
                            // Image variables.
                            $urlKey_benefits_fu_image = $key_benefits_fu_image['url'];
                        else :
                            $urlKey_benefits_fu_image = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;
                        get_template_part('template-parts/components/cards/card', 'six', array(
                            'card-six-image' =>  $urlKey_benefits_fu_image,
                            'card-six-title' => $key_benefits_fu_title,
                            'card-six-description' => $key_benefits_fu_description
                        ));
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="customers-benefits section-padding">
        <div class="container">
            <div class="section-title-wrapper text-center">
                <h2 class="section-title">Key Benefits for your Customers</h2>
            </div>
            <div class="customers-benefits__grid">
                <?php
                if (have_rows('key_benefits_for_your_customer_list', $pageElnvoicingID)) :
                    while (have_rows('key_benefits_for_your_customer_list', $pageElnvoicingID)) : the_row();
                        $cb_image = get_sub_field('key_benefits_tc_image');
                        $cb_title = get_sub_field('key_benefits_tc_title');
                        $cb_description = get_sub_field('key_benefits_tc_description');

                        if ($cb_image) :
                            // Image variables.
                            $urlcb_image = $cb_image['url'];
                        else :
                            $urlcb_image = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;
                        get_template_part('template-parts/components/cards/card', 'seven', array(
                            'card-seven-image' =>  $urlcb_image,
                            'card-seven-title' => $cb_title,
                            'card-seven-description' => $cb_description
                        ));
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>