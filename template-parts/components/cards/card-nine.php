<?php
$cardnineDate = new DateTime(get_the_date());
if ($args['card-nine-image']) {
    $cardnineImage = $args['card-nine-image'];
}
if ($args['card-nine-title']) {
    $cardnineTitle = $args['card-nine-title'];
}
if ($args['card-nine-link']) {
    $cardnineLink = $args['card-nine-link'];
}
?>
<div class="card-nine">
    <a href="<?php echo  $cardnineLink ?>" class="card-nine__image-container">
        <img src="<?php echo  $cardnineImage ?>" alt="<?php echo $cardnineTitle; ?>" class="card-nine__image">
    </a>
    <div class="card-nine__info-container">
        <a href="<?php echo  $cardnineLink ?>">
            <h4 class="card-nine__title"><?php echo $cardnineTitle ?></h4>
        </a>
        <a href="<?php echo  $cardnineLink ?>" class="card-nine__link"><?php echo pll__('Read more'); ?>
            <iconify-icon class="card-nine__icon" icon="ion:arrow-forward"></iconify-icon>
        </a>
    </div>
</div>