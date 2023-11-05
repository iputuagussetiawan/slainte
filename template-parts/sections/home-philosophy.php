<?php
$pageHomeID = get_field('home_link', 'page_link')->ID;
$pageHomeLink = get_permalink($pageHomeID);
$phiTitle = get_field('home_welcome_title', $pageHomeID);
$phiSubtitle = get_field('home_welcome_subtitle', $pageHomeID);
$phiDescription = get_field('home_welcome_description', $pageHomeID);
?>
<section class="home-philosophy section-padding--top">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-6 text-center">
                <p class="home-philosophy__subtitle">
                    <?= $phiSubtitle; ?>
                </p>
                <h2 class="home-philosophy__title">
                    <?= $phiTitle; ?>
                </h2>
                <p class="home-philosophy__description">
                    <?= $phiDescription; ?>
                </p>
            </div>
        </div>
    </div>
</section>