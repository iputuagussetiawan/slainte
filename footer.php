<?php

/**
 * Footer template
 *
 * @package AG Design
 */

$about_company = get_field('about_company', 'company-setting');
?>
<footer class="footer">
    <div class="container section-padding">
        <div class="footer__grid">
            <div class="footer__gallery-container">
                <?php
                $images = get_field('company_gallery', 'company-setting');
                if ($images) : ?>
                    <?php foreach ($images as $image) : ?>
                        <a href="<?php echo esc_url($image['url']); ?>" class="footer__gallery-image-container">
                            <img class="footer__gallery-image" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="footer__info">
                <?= $about_company; ?>
            </div>
            <div class="footer__menu-container">
                <div class="footer__menu">
                    <h3 class="footer__menu-title">Explore Euphoria</h3>
                    <?php
                    $args = array(
                        'theme_location'  => 'footer-menu',
                        'depth'           => 1,
                        'container'       => false,
                        'menu_class'      => 'footer__menus',
                        'add_li_class'    => 'footer__menu-item',
                        'link_class'      => 'footer__menu-link'
                    );
                    wp_nav_menu($args);
                    ?>
                    <!-- <ul class="footer__menus">
                        <li class="footer__menu-item">
                            <a href="#" class="footer__menu-link">HOME</a>
                        </li>
                    </ul> -->
                </div>
                <div class="footer__menu">
                    <h3 class="footer__menu-title">Blog</h3>
                    <ul class="footer__menus">
                        <?php
                        $args = array(
                            'hide_empty'          => 0,
                        );
                        $categories = get_categories($args);
                        foreach ($categories as $category) :
                        ?>
                            <li class="footer__menu-item">
                                <a href="<?php echo get_category_link($category->term_id); ?>" class="footer__menu-link"><?php echo $category->name ?></a>
                            </li>
                        <?php
                        endforeach;
                        ?>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="footer-copyright__left">
            <p class="footer-copyright__text">O'Rourke | P.O BOX 3564 SEATTLE, WA 99347 | <a href="mailto:INFO@ORourkE.COM">INFO@ORourkE.COM</a></p>
        </div>
        <div class="footer-copyright__right">
            <p class="footer-copyright__text">@ 2022 O'Rourke | SITE CREDIT</p>
            <div class="footer__social-container">
                <ul class="footer__social-icon">
                    <?php
                    if (have_rows('social_icons_list', 'company-setting')) :
                        while (have_rows('social_icons_list', 'company-setting')) : the_row();
                            $socialIcon = get_sub_field('social_icon', 'company-setting');
                            $isActive = get_sub_field('social_is_active', 'company-setting');
                    ?>
                            <?php
                            if ($isActive) :
                            ?>
                                <li class="footer__social-item">
                                    <a href="<?php the_sub_field('social_link', 'company-setting'); ?>" class="footer__social-link" target="_blank" rel="noreferrer noopener nofollow">
                                        <img width="16" height="16" class="footer__social-img" src="<?php echo esc_url($socialIcon['url']); ?>" alt="<?php the_sub_field('social_title', 'company-setting'); ?>">
                                    </a>
                                </li>
                            <?php
                            endif;
                            ?>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="offcanvas offcanvas-end offcanvas-menu" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel"></h5>
        <button type="button" class="btn btn-close-custom btn-close-offcanvas-right" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="ion:close-outline" style="color: white;"></iconify-icon>
        </button>
    </div>
    <div class="offcanvas-body">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => ' ',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="sidebar-nav%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
        ));
        ?>
    </div>
</div>




<?php wp_footer(); ?>
</body>

</html>