<?php
/*
    Template Name: Home
*/
?>
<?php get_header(); ?>
<main class="m-0">
    <?php
    get_template_part('template-parts/sections/home', 'banner');
    get_template_part('template-parts/sections/home', 'philosophy');
    // get_template_part('template-parts/sections/home', 'behind-brand');
    // get_template_part('template-parts/sections/home', 'media');
    get_template_part('template-parts/sections/home', 'related-link');
    get_template_part('template-parts/sections/home', 'familyestate');
    ?>
</main>
<?php get_footer(); ?>