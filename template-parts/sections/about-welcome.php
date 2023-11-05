<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageAboutID);
$about_welcome_title = get_field('about_welcome_title', $pagePeopleID);
?>
<section class="about-welcome">
    <div class="container">
        <div class="about-welcome__grid">
            <div class="about-welcome__info-container">
                <h2 class="about-welcome__title" data-aos="fade-up">
                    <?= $about_welcome_title; ?>
                </h2>
            </div>
            <div class="about-welcome__image-wrapper" data-aos="fade-up" data-aos-delay="400">
                <?php
                if (have_rows('about_welcome_product_image_list', $pageAboutID)) :
                    while (have_rows('about_welcome_product_image_list', $pageAboutID)) : the_row();
                        $aboutWelcomeImage = get_sub_field('about_product_image_item');
                        if ($aboutWelcomeImage) :
                            $urlAboutWelcomeImage = $aboutWelcomeImage['url'];
                        else :
                            $urlAboutWelcomeImage = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;
                ?>

                        <div class="about-welcome__image-container">
                            <img src="<?= $urlAboutWelcomeImage; ?>" alt="about welcome image product" class="about-welcome__image">
                        </div>
                <?php

                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>