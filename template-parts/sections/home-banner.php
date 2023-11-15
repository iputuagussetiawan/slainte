<section class="banner">
    <?php
    $imageLogo = get_field('logo_white', 'company-setting');
    if ($imageLogo) :
        // Image variables.
        $urlImageLogo = $imageLogo['url'];
    endif;
    ?>
    <div class="banner__logo-mobile-wrapper">
        <div class="banner__logo-mobile-container">
            <img class="banner__logo-mobile" src="<?= $urlImageLogo; ?>" alt="logo mobile">
        </div>
    </div>
    <div class="swiper banner__slider">
        <div class="swiper-wrapper">
            <?php
            if (have_rows('banner_slider')) :
                while (have_rows('banner_slider')) : the_row();
                    $image = get_sub_field('banner_image');
                    $imageMobile = get_sub_field('banner_image_mobile');
            ?>
                    <div class="swiper-slide">
                        <div class="banner__inner">
                            <div class="banner__image-container">
                                <?php
                                if (!empty($image)) : ?>
                                    <picture>
                                        <source media="(min-width:768px)" srcset="<?php echo esc_url($image['url']); ?>">
                                        <img class="banner__image" src="<?php echo esc_url($imageMobile['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    </picture>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <!-- <div class="swiper-button-next banner__next"></div>
        <div class="swiper-button-prev banner__prev"></div> -->
    </div>
    <div class="container banner__container">
        <div class="form-subscriber">
            <p class="form-subscriber__subtitle">
                “O'ROURKE FAMILY ESTATE WINERY
            </p>
            <h1 class="form-subscriber__title">Stay in the know. Sign up to receive updates, access to wine, and special event details.</h1>
            <p class="form-subscriber__description">Your privacy is important to us.”</p>
            <?php
            echo do_shortcode('[contact-form-7 id="489" title="Banner Home Subscriber"]');
            ?>
        </div>
    </div>
    <!-- <div class="swiper-pagination banner__pagination"></div> -->
</section>