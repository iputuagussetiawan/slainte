<?php
if ($args['card-seven-image']) {
    $cardSevenImage = $args['card-seven-image'];
}

if ($args['card-seven-title']) {
    $cardSevenTitle = $args['card-seven-title'];
}

if ($args['card-seven-description']) {
    $cardSevenDescription = $args['card-seven-description'];
}

if ($args['card-seven-type']) {
    $cardSevenType = $args['card-seven-type'];
}
?>
<div class="card-seven<?php echo $cardSevenType ?>">
    <div class="card-seven__image-container">
        <img src="<?= $cardSevenImage; ?>" alt="<?= $cardSevenTitle; ?>">
    </div>
    <div class="card-seven__info-container">
        <h4 class="card-seven__title">
            <?= $cardSevenTitle; ?>
        </h4>
        <div class="card-seven__content">
            <?= $cardSevenDescription; ?>
        </div>
    </div>
</div>