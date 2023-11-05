<?php
$pageContactID = get_field('contact_link', 'page_link')->ID;
$pageContactLink = get_permalink($pageContactID);
$page_contact_title = get_field('page_contact_title', $pageContactID);
$page_contact_description = get_field('page_contact_description', $pageContactID);
?>
<section class="contact-form section-padding">
    <div class="container">
        <h1 class="contact-form__title" data-aos="fade-up">
            <?= $page_contact_title; ?>
        </h1>
        <p class="contact-form__description" data-aos="fade-up" data-aos-delay="400">
            <?= $page_contact_description; ?>
        </p>
        <div data-aos="fade-up" data-aos-delay="400">
            <?php
            echo do_shortcode('[contact-form-7 id="398" title="Contact form"]');
            ?>
        </div>
    </div>
</section>