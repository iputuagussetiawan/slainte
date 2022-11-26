<?php
/*
    Template Name: Source to Pay
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/sections/services', 'sourcetopay-banner');
    get_template_part('template-parts/sections/services', 'sourcetopay-welcome');
    get_template_part('template-parts/sections/services', 'sourcetopay-ensure');
    get_template_part('template-parts/sections/services', 'sourcetopay-useful-content');
    get_template_part('template-parts/sections/services', 'sourcetopay-key-concept');
    get_template_part('template-parts/sections/about', 'trustedby');
    get_template_part('template-parts/sections/about', 'why-us');
    get_template_part('template-parts/sections/casestudy', 'check');
    ?>


   
</main>
<?php get_footer(); ?>