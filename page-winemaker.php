<?php
/*
    Template Name: Wine Maker
*/
?>
<?php get_header(); ?>
<main class="m-0">
    <?php
    get_template_part('template-parts/sections/page', 'header');
    get_template_part('template-parts/sections/winemaker', 'welcome');
    get_template_part('template-parts/sections/winemaker', 'founder');
    get_template_part('template-parts/sections/winemaker', 'teams');
    ?>
</main>
<?php get_footer(); ?>