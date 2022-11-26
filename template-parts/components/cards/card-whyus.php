<?php
if ($args['card-whyus-thumb']) {
    $cardWhyusThumb = $args['card-whyus-thumb'];
}

if ($args['card-whyus-title']) {
    $cardWhyusTitle = $args['card-whyus-title'];
}

if ($args['card-whyus-description']) {
    $cardWhyusDescription = $args['card-whyus-description'];
}

if ($cardWhyusThumb) :
    $urlCardWhyusThumb  = $cardWhyusThumb['url'];
else :
    $urlCardWhyusThumb = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<div class="card-whyus">
    <div class="card-whyus__info-container">
        <h3 class="card-whyus__title">
            <?php echo $cardWhyusTitle; ?>
        </h3>
        <div class="card-whyus__body">
            <?php echo $cardWhyusDescription ?>
        </div>
    </div>
    <div class="card-whyus__image-container">
        <img class="card-whyus__image" src="<?php echo  $urlCardWhyusThumb ?>" alt="<?php echo $cardWhyusTitle ?>">
    </div>
</div>