<?php
$postID = get_the_ID();
$title = get_the_title();
$serviceThumbnail = get_field('service_thumbnail', $postID);
$serviceIcon = get_field('service_icon', $postID);
$serviceSortDescription = get_field('service_sort_description', $postID);
if ($serviceThumbnail) :
    $urlServiceThumbnail = $serviceThumbnail['url'];
else :
    $urlServiceThumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;

if ($serviceIcon) :
    $urlServiceIcon = $serviceIcon['url'];
else :
    $urlServiceIcon = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<div class="card-service">
    <div class="card-service__info-container">
        <div class="card-service__icon-container">
            <img class="card-service__icon" src="<?php echo $urlServiceIcon ?>" alt="<?php echo $title ?>">
        </div>
        <h3 class="card-service__title">
            <?php echo $title; ?>
        </h3>
        <div class="card-service__body">
            <?php echo $serviceSortDescription ?>
        </div>
        <div class="card-service__btn-wrapper">
            <a href="<?php the_permalink() ?>" class="btn btn-primary"><?php echo pll__('Explore'); ?> <?php echo $title ?></a>
        </div>
    </div>
    <div class="card-service__image-container">
        <img class="card-service__image" src="<?php echo  $urlServiceThumbnail ?>" alt="<?php echo $title ?>">
    </div>
</div>