<?php
if ($args['card-image']) {
    $cardPostBigImage = $args['card-image'];
}

if ($args['card-title']) {
    $cardPostBigTitle = $args['card-title'];
}

if ($args['card-description']) {
    $cardPostBigDescription = $args['card-description'];
}


?>
<div class="card-post-big" data-aos="fade-up" data-aos-delay="400">
    <a href="<?php the_permalink() ?>" class="card-post-big__image-container">
        <img class="card-post-big__image" src="<?= $cardPostBigImage; ?>" alt="<?= $cardPostBigTitle; ?>">
    </a>
    <div class="card-post-big__info-container">
        <p class="card-post-big__author"><?php echo get_the_date('M j Y'); ?> /blog/by <?= get_the_author(); ?> </p>
        <a href="<?php the_permalink() ?>" class="card-post-big__title"><?= $cardPostBigTitle; ?></a>
        <div class="card-post-big__content">
            <?= $cardPostBigDescription; ?>
        </div>
        <a href="<?php the_permalink() ?>" class="card-post-big__readmore">Readmore</a>
    </div>
</div>