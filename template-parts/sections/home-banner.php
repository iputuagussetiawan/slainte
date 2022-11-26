<section class="banner">
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
                O'Rourke wines sparkling
            </p>
            <h1 class="form-subscriber__title">Subscribe to our newsletter and never miss our new products, latest news, etc.</h1>
            <p class="form-subscriber__description">Our Newsletter is sent once a week, every Monday.</p>
            <form>
                <div class="form-subscriber__form-wrapper">
                    <input type="text" class="form-control form-control-custom" id="customerFirstName" placeholder="First Name">
                </div>
                <div class="form-subscriber__form-wrapper">
                    <input type="text" class="form-control form-control-custom" id="customerLastName" placeholder="Last Name">
                </div>
                <div class="form-subscriber__form-wrapper">
                    <input type="email" class="form-control form-control-custom" id="customerEmail" placeholder="Email">
                </div>
                <div class="form-subscriber__btn-wrapper">
                    <button type="submit" class="btn btn-primary">SIGN UP</button>
                </div>

            </form>
        </div>
    </div>
    <!-- <div class="swiper-pagination banner__pagination"></div> -->
</section>