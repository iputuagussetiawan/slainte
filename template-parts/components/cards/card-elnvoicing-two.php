<?php
if ($args['card-elnvoicing-image']) {
    $cardElnvoicingImage = $args['card-elnvoicing-image'];
}

if ($args['card-elnvoicing-description']) {
    $cardElnvoicingDescription = $args['card-elnvoicing-description'];
}
?>
<div class="card-elnvoicing-two section-padding--top">
    <div class="card-elnvoicing-two__image-container">
        <img class="img-fluid" src="<?= $cardElnvoicingImage; ?>" alt="InvoiceSense">
    </div>
    <div class="card-elnvoicing-two__info-container">
        <div class="card-elnvoicing-two__content">
            <?= $cardElnvoicingDescription; ?>
        </div>
    </div>
</div>