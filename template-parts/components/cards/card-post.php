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
<a href="<?php the_permalink() ?>" class="card-post" data-aos="fade-up" data-aos-delay="400">
    <h4 class="card-post__title"><?= $cardPostBigTitle; ?></h4>
    <div class="card-post__image-container">
        <img class="card-post__image" src="<?= $cardPostBigImage; ?>" alt="<?= $cardPostBigTitle; ?>">
    </div>
    <div class="card-post__info-container">
        <p class="card-post__author"><?php echo get_the_date('M j Y'); ?> /blog/by <?= get_the_author(); ?> </p>
        <div class="card-post__content">
            <?= $cardPostBigDescription; ?>
        </div>
    </div>
</a>