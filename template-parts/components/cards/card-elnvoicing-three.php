<?php
if ($args['card-elnvoicing-image']) {
    $cardElnvoicingImage = $args['card-elnvoicing-image'];
}

if ($args['card-elnvoicing-title']) {
    $cardElnvoicingTitle = $args['card-elnvoicing-title'];
}

if ($args['card-elnvoicing-description']) {
    $cardElnvoicingDescription = $args['card-elnvoicing-description'];
}
?>
<div class="card-elnvoicing-three section-padding--top">
    <div class="card-elnvoicing-three__info-container">
        <h4 class="card-elnvoicing-three__title"> <?= $cardElnvoicingTitle; ?></h4>
        <div class="card-elnvoicing-three__content">
            <?= $cardElnvoicingDescription; ?>
        </div>
    </div>
    <div class="card-elnvoicing-three__image-container">
        <img class="img-fluid" src="<?= $cardElnvoicingImage; ?>" alt="InvoiceSense">
    </div>
</div>