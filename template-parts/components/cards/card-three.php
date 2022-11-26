<?php
if ($args['card-three-icon']) {
    $cardthreeIcon = $args['card-three-icon'];
}

if ($args['card-three-title']) {
    $cardthreeTitle = $args['card-three-title'];
}

if ($cardthreeIcon) :
    $urlCardthreeIcon  = $cardthreeIcon['url'];
else :
    $urlCardthreeIcon = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<div class="card-three">
    <div class="card-three__image-container">
        <img class="card-three__image" src=" <?php echo esc_url($urlCardthreeIcon) ?>" alt="<?php echo $cardthreeTitle ?>">
    </div>
    <div class="card-three__info-container">
        <p class="card-three__info"><?php echo $cardthreeTitle ?></p>
    </div>
</div>