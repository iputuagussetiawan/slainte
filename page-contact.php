<?php
/*
    Template Name: Contact
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/sections/contact', 'form');
    get_template_part('template-parts/sections/contact', 'map');
    get_template_part('template-parts/sections/home', 'familyestate');
    ?>
</main>
<?php get_footer(); ?>