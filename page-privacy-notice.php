<?php
/*
    Template Name: Privacy Notice
*/
?>
<?php get_header(); ?>
<main>
    <section class="privacy-notice section-padding">
        <div class="container">
            <div class="privacy-notice__grid">
                <div class="privacy-notice__inner">
                    <div class="section-title-wrapper">
                        <h1 class="section-title"><?php the_title() ?></h1>
                    </div>
                    <div class="privacy-notice__content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>