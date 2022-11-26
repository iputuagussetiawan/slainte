<?php
$cardeightDate = new DateTime(get_the_date());
if ($args['card-eight-image']) {
    $cardeightImage = $args['card-eight-image'];
}
if ($args['card-eight-title']) {
    $cardeightTitle = $args['card-eight-title'];
}
if ($args['card-eight-description']) {
    $cardeightDescription = $args['card-eight-description'];
}
?>
<div class="card-eight">
    <a href="<?php the_permalink() ?>" class="card-eight__image-container">
        <img src="<?php echo  $cardeightImage ?>" alt="<?php echo $cardeightTitle; ?>" class="card-eight__image">
    </a>
    <div class="card-eight__info-container">
        <p class="card-eight__date"><?php echo $cardeightDate->format('F d, Y'); ?></p>
        <a href="<?php the_permalink() ?>">
            <h4 class="card-eight__title"><?php echo $cardeightTitle ?></h4>
        </a>
        <?php
        if ($cardeightDescription) :
        ?>
            <div class="card-eight__content">
                <?php echo $cardeightDescription ?>
            </div>
        <?php
        endif;
        ?>
        <a href="<?php the_permalink() ?>" class="card-eight__link"><?php echo pll__('Read more'); ?>
            <iconify-icon class="card-eight__icon" icon="ion:arrow-forward"></iconify-icon>
        </a>
    </div>
</div>