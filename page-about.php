<?php
/*
    Template Name: About Us
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/sections/about', 'banner');
    get_template_part('template-parts/sections/about', 'our-different');
    get_template_part('template-parts/sections/about', 'our-partners');
    get_template_part('template-parts/sections/about', 'trustedby');
    get_template_part('template-parts/sections/about', 'why-us');
    ?>
</main>
<?php get_footer(); ?>