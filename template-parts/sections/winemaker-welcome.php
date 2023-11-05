<?php
$pageWineMakerID = get_field('winemaker_link', 'page_link')->ID;
$pageWineMakerLink = get_permalink($pageWineMakerID);
$winemake_welcome_section_thumbnail = get_field('winemake_welcome_section_thumbnail', $pageWineMakerID);
$winemake_welcome_section_description = get_field('winemake_welcome_section_description', $pageWineMakerID);

if ($winemake_welcome_section_thumbnail) :
    $urlWinemake_welcome_section_thumbnail = $winemake_welcome_section_thumbnail['url'];
else :
    $urlWinemake_welcome_section_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="winemaker-welcome section-padding">
    <div class="container">
        <div class="winemaker-welcome__grid">
            <div class="winemaker-welcome__info-container" data-aos="fade-up">
                <?= $winemake_welcome_section_description; ?>
            </div>
            <div class="winemaker-welcome__image-container" data-aos="fade-up" data-aos-delay="400">
                <img src="<?= $urlWinemake_welcome_section_thumbnail; ?>" alt="winemaker welcome" class="winemaker-welcome__image">
            </div>
        </div>
    </div>
</section>