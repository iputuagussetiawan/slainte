<?php
/*
    Template Name: Our Approach
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/sections/approach', 'banner');
    get_template_part('template-parts/sections/approach', 'steps-list');
    get_template_part('template-parts/sections/approach', 'detail');
    ?>
</main>
<?php get_footer(); ?>