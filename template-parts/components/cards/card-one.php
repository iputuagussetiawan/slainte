<?php
$postDate = new DateTime(get_the_date());
if ($args['card-one-image']) {
    $cardOneImage = $args['card-one-image'];
}

if ($args['card-one-title']) {
    $cardOneTitle = $args['card-one-title'];
}

?>
<div class="card-one">
    <a href="<?php the_permalink() ?>" class="card-one__image-container">
        <img class="card-one__image" src="<?= $cardOneImage; ?>" alt="<?= $cardOneTitle; ?>">
    </a>
    <div class="card-one__info-container">
        <div class="">
            <?php
            $categories = get_the_category($post->ID);
            foreach ($categories as $cat) :
            ?>
                <p class="card-one__category"><?php echo $cat->name; ?></p>
            <?php
            endforeach;
            ?>
        </div>

        <a href="<?php the_permalink() ?>" class="card-one__title"><?= $cardOneTitle; ?></a>
    </div>
</div>