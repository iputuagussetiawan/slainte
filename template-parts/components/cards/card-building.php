 <?php
    $pageAboutID = get_field('about_link', 'page_link')->ID;
    $postDate = new DateTime(get_the_date());
    if ($args['card-building-image']) {
        $cardBuildingImage = $args['card-building-image'];
    }
    if ($args['card-building-title']) {
        $cardBuildingTitle = $args['card-building-title'];
    }
    if ($args['card-building-description']) {
        $cardBuildingDescription = $args['card-building-description'];
    }
    $our_building_title = get_sub_field('our_building_title', $pageAboutID);
    $reservation_text = get_sub_field('reservation_text', $pageAboutID);
    $inquire_text = get_sub_field('inquire_text', $pageAboutID);
    $booking_link = get_sub_field('booking_link', $pageAboutID);




    ?>
 <div class="card-building">
     <div class="card-building__info-container">
         <h4 class="card-building__title"><?= $cardBuildingTitle; ?></h4>
         <div class="card-building__description"><?= $cardBuildingDescription; ?></div>
     </div>
     <div class="card-building__imageInfo-wrapper">
         <div class="card-building__image-container">
             <img class="card-building__image" src="<?= $cardBuildingImage; ?>" alt="<?= $cardBuildingTitle; ?>">
         </div>
         <div class="card-building__detail">
             <?php if (have_rows('our_building_open_hour_list',  $pageAboutID)) : ?>
                 <div class="card-building__openhour-container">
                     <?php while (have_rows('our_building_open_hour_list',  $pageAboutID)) : the_row();
                            $open_hour_item = get_sub_field('open_hour_item');
                        ?>
                         <p class="card-building__openhour">
                             <?= $open_hour_item; ?>
                         </p>
                     <?php endwhile; ?>
                 </div>
             <?php endif; ?>
             <div class="card-building__detail-content">
                 <?= $reservation_text; ?>
                 <br />

                 <?= $inquire_text; ?>
             </div>
             <div class="d-grid gap-2">
                 <a href="<?= $booking_link; ?>" class="btn btn-outline-secondary" type="button">book now</a>
             </div>
         </div>
     </div>

 </div>