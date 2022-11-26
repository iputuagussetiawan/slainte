<?php
if ($args['card-four-image']) {
    $cardfourimage = $args['card-four-image'];
}

if ($args['card-four-title']) {
    $cardfourTitle = $args['card-four-title'];
}

if ($args['card-four-link']) {
    $cardfourLink = $args['card-four-link'];
}

if ($cardfourimage) :
    $urlCardfourimage  = $cardfourimage['url'];
else :
    $urlCardfourimage = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<div class="card-four">
    <div class="card-four__image-container">
        <img class="card-four__image" src=" <?php echo esc_url($urlCardfourimage) ?>" alt="<?php echo $cardfourTitle ?>">
    </div>
    <div class="card-four__info-container">
        <h4 class="card-four__title">
            <?php echo $cardfourTitle ?>
        </h4>
        <a href="<?= $cardfourLink; ?>" class="card-four__link">Read More
            <iconify-icon class="card-four__icon" icon="ion:arrow-forward"></iconify-icon>
        </a>
    </div>
</div>