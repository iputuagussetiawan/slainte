<?php
$caseStudyDate = new DateTime(get_the_date());
if ($args['card-five-image']) {
    $cardFiveImage = $args['card-five-image'];
}

if ($args['card-five-title']) {
    $cardFiveTitle = $args['card-five-title'];
}

?>
<div class="card-five">
    <a href="<?php the_permalink() ?>" class="card-five__image-container">
        <img src="<?php echo  $cardFiveImage ?>" alt="<?php echo $cardFiveTitle; ?>" class="card-five__image">
    </a>
    <div class="card-five__info-container">
        <p class="card-five__date"><?php echo $caseStudyDate->format('F d, Y'); ?></p>
        <a href="<?php the_permalink() ?>">
            <h4 class="card-five__title"><?php echo $cardFiveTitle ?></h4>
        </a>
        <a href="<?php the_permalink() ?>" class="card-five__link"><?php echo pll__('Read more'); ?>
            <iconify-icon class="card-five__icon" icon="ion:arrow-forward"></iconify-icon>
        </a>
    </div>
</div>