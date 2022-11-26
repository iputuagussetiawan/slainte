<?php
if ($args['card-six-image']) {
    $cardSixImage = $args['card-six-image'];
}

if ($args['card-six-title']) {
    $cardSixTitle = $args['card-six-title'];
}

if ($args['card-six-description']) {
    $cardSixDescription = $args['card-six-description'];
}

if ($args['card-six-step']) {
    $cardSixStep = $args['card-six-step'];
}

if ($args['card-six-type']) {
    $cardSixType = $args['card-six-type'];
}


?>
<div class="card-six<?php echo $cardSixType ?>    <?php if ($cardSixStep) echo 'step-' . $cardSixStep; ?>">
    <?php
    if ($cardSixImage) :
    ?>
        <div class="card-six__image-container">
            <img src="<?= $cardSixImage; ?>" alt="<?= $cardSixTitle; ?>">
        </div>
    <?php
    endif;
    ?>
    <div class="card-six__info-container">
        <?php
        if ($cardSixTitle) :
        ?>
            <h4 class="card-six__title">
                <?= $cardSixTitle; ?>
            </h4>
        <?php
        endif;
        ?>
        <div class="card-six__content">
            <?= $cardSixDescription; ?>
        </div>
    </div>
</div>