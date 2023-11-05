 <?php
    $postDate = new DateTime(get_the_date());
    if ($args['card-garden-image']) {
        $cardGardenImage = $args['card-garden-image'];
    }

    if ($args['card-garden-title']) {
        $cardGardenTitle = $args['card-garden-title'];
    }

    if ($args['card-garden-description']) {
        $cardGardenDescription = $args['card-garden-description'];
    }
    ?>
 <div class="card-garden" data-aos="fade-up" data-aos-delay="400">
     <div class="card-garden__info-container">
         <h4 class="card-garden__title"><?= $cardGardenTitle; ?></h4>
     </div>
     <div class="card-garden__image-container">
         <img class="card-garden__image" src="<?= $cardGardenImage; ?>" alt="<?= $cardGardenTitle; ?>">
     </div>
     <div class="card-garden__description-container">
         <div class="card-garden__description"><?= $cardGardenDescription; ?></div>
     </div>
 </div>