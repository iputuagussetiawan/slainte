<?php
if ($args['card-product-image']) {
    $cardProductImage = $args['card-product-image'];
}

if ($args['card-product-title']) {
    $cardProductTitle = $args['card-product-title'];
}

if ($args['card-product-description']) {
    $cardProductDescription = $args['card-product-description'];
}

if ($args['card-product-vintage']) {
    $cardProductVintage = $args['card-product-vintage'];
}

if ($args['card-product-varietal']) {
    $cardProductVarietal = $args['card-product-varietal'];
}

if ($args['card-product-appellation']) {
    $cardProductAppellation = $args['card-product-appellation'];
}

if ($args['card-product-alcohol-percentage']) {
    $cardProductAlcohol = $args['card-product-alcohol-percentage'];
}
?>

<div class="card-product" data-aos="fade-up" data-aos-delay="300">
    <h4 class="card-product__title">
        <?= $cardProductTitle; ?>
    </h4>
    <div class="card-product__info-container">
        <div class="card-product__sort-description">
            <?= $cardProductDescription; ?>
        </div>
    </div>
    <div class="card-product__image-container">
        <img class="card-product__image" src="<?= $cardProductImage; ?>" alt=" <?= $cardProductTitle; ?>">
    </div>
    <div class="card-product__specs-container">
        <h4 class="card-product__specs-title">
            Wine Specs
        </h4>
        <ul class="card-product__specs">
            <?php
            if ($cardProductVintage) :
            ?>
                <li class="card-product__specs-item">
                    <p class="card-product__specs-label">Vintage</p>
                    <p class="card-product__specs-value"><?= $cardProductVintage; ?></p>
                </li>
            <?php
            endif;
            ?>
            <?php
            if ($cardProductVarietal) :
            ?>
                <li class="card-product__specs-item">
                    <p class="card-product__specs-label">Varietal</p>
                    <p class="card-product__specs-value"><?= $cardProductVarietal; ?></p>
                </li>
            <?php
            endif;
            ?>
            <?php
            if ($cardProductAppellation) :
            ?>
                <li class="card-product__specs-item">
                    <p class="card-product__specs-label">Appellation</p>
                    <p class="card-product__specs-value"><?= $cardProductAppellation; ?></p>
                </li>
            <?php
            endif
            ?>
            <?php
            if ($cardProductAlcohol) :
            ?>
                <li class="card-product__specs-item">
                    <p class="card-product__specs-label"> Alcohol %</p>
                    <p class="card-product__specs-value"><?= $cardProductAlcohol; ?></p>
                </li>
            <?php
            endif
            ?>
        </ul>
    </div>
</div>