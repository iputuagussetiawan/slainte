<?php
if ($args['card-two-icon']) {
    $cardTwoIcon = $args['card-two-icon'];
}

if ($args['card-two-title']) {
    $cardTwoTitle = $args['card-two-title'];
}

if ($args['card-two-subtitle']) {
    $cardTwoSubtitle = $args['card-two-subtitle'];
}

if ($args['card-two-description']) {
    $cardTwoDescription = $args['card-two-description'];
}

if ($cardTwoIcon) :
    $urlCardTwoIcon  = $cardTwoIcon['url'];
else :
    $urlCardTwoIcon = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>

<div class="card-two">
    <div class="card-two__icon-container">
        <img class="card-two__icon" src=" <?php echo esc_url($urlCardTwoIcon) ?>" alt="<?php echo $cardTwoTitle ?>">
    </div>
    <div class=" card-two__header">
        <h3 class="card-two__title"><?php echo $cardTwoTitle ?></h3>
        <p class="card-two__subtitle"><?php echo  $cardTwoSubtitle ?></p>
    </div>
    <div class=" card-two__body">
        <?php echo  $cardTwoDescription ?>
    </div>
</div>