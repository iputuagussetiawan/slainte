<?php
/*
    Template Name: Wine
*/
?>
<?php get_header('header-two'); ?>
<main>
    <?php
    get_template_part('template-parts/sections/wine', 'banner');
    get_template_part('template-parts/sections/wine', 'products');
    ?>
</main>
<?php get_footer(); ?>