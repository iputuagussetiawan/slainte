<?php
/*
    Template Name: Home
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/sections/home', 'banner');
    get_template_part('template-parts/sections/home', 'philosophy');
    get_template_part('template-parts/sections/home', 'behind-brand');

    ?>
</main>
<?php get_footer(); ?>