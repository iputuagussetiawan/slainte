<?php
/*
    Template Name: About Us
*/
?>
<?php get_header(); ?>
<main class="m-0">
    <?php
    get_template_part('template-parts/sections/page', 'header');
    get_template_part('template-parts/sections/about', 'welcome');
    get_template_part('template-parts/sections/about', 'building');
    get_template_part('template-parts/sections/about', 'garden');
    get_template_part('template-parts/sections/about', 'story');
    ?>
</main>
<?php get_footer(); ?>