<?php
$pageHeaderTitle = get_field('page_header_title');
$pageHeaderSubTitle = get_field('page_header_subtitle');
$pageHeaderDescription = get_field('page_header_description');
$pageHeaderImage = get_field('page_header_image');

if ($pageHeaderImage) :
    $urlPageHeaderImage = $pageHeaderImage['url'];
else :
    $urlPageHeaderImage = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="page-header">
    <div class="page-header__image-container">
        <img class="page-header__image" src="<?= $urlPageHeaderImage; ?>" alt="<?= $pageHeaderTitle; ?>">
    </div>
    <div class="container page-header__container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h1 class="page-header__title" data-aos="fade-up">
                    <?= $pageHeaderTitle; ?>
                </h1>
                <p class="page-header__subtitle" data-aos="fade-up" data-aos-delay="200"><?= $pageHeaderSubTitle; ?></p>
                <div class="page-header__description" data-aos="fade-up" data-aos-delay="300"><?= $pageHeaderDescription; ?></div>
            </div>
        </div>
    </div>
</section>