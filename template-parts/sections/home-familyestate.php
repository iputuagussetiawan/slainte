<?php
$pageHomeID = get_field('home_link', 'page_link')->ID;
$pageHomeLink = get_permalink($pageHomeID);
$family_estate_title = get_field('family_estate_title', $pageHomeID);
$family_estate_description = get_field('family_estate_description', $pageHomeID);
?>
<section class="family-estate section-padding" style="background:url('<?php echo get_template_directory_uri() . '/src/images/bg/BG-01.jpg' ?>')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <div class="family-estate__title-wrapper" data-aos="fade-up">
                    <h2 class="family-estate__title">
                        <?= $family_estate_title; ?>
                    </h2>
                    <p class="family-estate__description">
                        <?= $family_estate_description; ?>
                    </p>
                </div>
                <div data-aos="fade-up">
                    <?php
                    echo do_shortcode('[contact-form-7 id="491" title="O’ROURKE FAMILY ESTATE FORM"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>