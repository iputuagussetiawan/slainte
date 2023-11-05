<?php
$pageWineMakerID = get_field('winemaker_link', 'page_link')->ID;
$pageWineMakerLink = get_permalink($pageWineMakerID);
$founder_thumbnail = get_field('founder_thumbnail', $pageWineMakerID);
$founder_description = get_field('founder_description', $pageWineMakerID);

if ($founder_thumbnail) :
    $urlFounder_thumbnail = $founder_thumbnail['url'];
else :
    $urlFounder_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="winemaker-founder">
    <div class="container winemaker-founder__container">
        <div class="winemaker-founder__grid">
            <div class="winemaker-founder__image-container" data-aos="fade-up">
                <img src="<?= $urlFounder_thumbnail; ?>" alt="winemaker welcome" class="winemaker-welcome__image">
            </div>
            <div class="winemaker-founder__info-container" data-aos="fade-up" data-aos-delay="400">
                <div class="winemaker-founder__description">
                    <?= $founder_description; ?>
                </div>
            </div>
        </div>
    </div>
</section>