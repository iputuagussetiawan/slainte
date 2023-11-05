<?php
$pageWineID = get_field('wine_link', 'page_link')->ID;
$pageWineLink = get_permalink($pageWineID);
$behind_the_brand_title = get_field('page_wine_title', $pageWineID);
$behind_the_brand_description_ = get_field('page_wine_description', $pageWineID);
?>
<section class="wine-banner section-padding">
    <div class="container wine-banner__container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h1 class="wine-banner__title" data-aos="fade-up">
                    <?= $behind_the_brand_title; ?>
                </h1>
                <p class="wine-banner__description" data-aos="fade-up" data-aos-delay="300">
                    <?= $behind_the_brand_description_; ?>
                </p>
            </div>
        </div>
    </div>
</section>