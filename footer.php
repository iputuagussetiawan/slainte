<?php

/**
 * Footer template
 *
 * @package AG Design
 */

$about_company = get_field('about_company', 'company-setting');
?>
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