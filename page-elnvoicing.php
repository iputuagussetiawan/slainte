<?php
/*
    Template Name: Elnvoicing
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/sections/page', 'header');
    get_template_part('template-parts/sections/elnvoicing', 'what');
    get_template_part('template-parts/sections/elnvoicing', 'why');
    get_template_part('template-parts/sections/elnvoicing', 'counter');
    get_template_part('template-parts/sections/elnvoicing', 'trustedby');
    get_template_part('template-parts/sections/elnvoicing', 'automation-solutions');
    get_template_part('template-parts/sections/elnvoicing', 'InvoiceSense');
    get_template_part('template-parts/sections/elnvoicing', 'peppol-eInvoicing-services');
    get_template_part('template-parts/sections/elnvoicing', 'accounts-receivable-automation');
    get_template_part('template-parts/sections/elnvoicing', 'counter');
    get_template_part('template-parts/sections/elnvoicing', 'trustedby');
    ?>
</main>
<?php get_footer(); ?>