<?php
    $cardProductTitle=isset($args['card-product-title']) ? $args['card-product-title'] : null ;
    $cardProductDescription=isset($args['card-product-description']) ? $args['card-product-description'] : null ;
    $cardProductColor=isset($args['card-product-color']) ? $args['card-product-color'] : null ;
    $cardProductAroma=isset($args['card-product-aroma']) ? $args['card-product-aroma'] : null ;
    $cardProductFlavour=isset($args['card-product-flavour']) ? $args['card-product-flavour'] : null ;
    $cardProductAlcoholPercentage=isset($args['card-product-alcohol-percentage']) ? $args['card-product-alcohol-percentage'] : null ;
    $cardProductCellaring=isset($args['card-product-cellaring']) ? $args['card-product-cellaring'] : null ;
    $cardProductImage=isset($args['card-product-image']) ? $args['card-product-image'] : null ;
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