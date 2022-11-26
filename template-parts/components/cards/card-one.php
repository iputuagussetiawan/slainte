<?php
$postID = get_the_ID();
$name = get_the_title();
$position = get_field('position', $postID);
$position = get_field('position', $postID);
$customer_photo = get_field('customer_photo', $postID);
$company_from = get_field('company_from_', $postID);
$company_from_logo = get_field('company_from_logo', $postID);
$testimonial_message = get_field('testimonial_message', $postID);


if ($customer_photo) :
    $urlCustomer_photo = $customer_photo['url'];
else :
    $urlCustomer_photo = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;

if ($company_from_logo) :
    $urlCompany_from_logo = $company_from_logo['url'];
else :
    $urlCompany_from_logo = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>

<div class="card-one">
    <div class="card-one__user-container">
        <div class="card-one__photo-container">
            <img class="card-one__user-photo" src="<?php echo  $urlCustomer_photo  ?>" alt="<?php echo $name ?>">
        </div>
        <div class="card-one__info-container">
            <h3 class="card-one__name">
                <?php
                echo $name;
                ?>
            </h3>
            <p class="card-one__position"><?php echo $position ?>, <?php echo $company_from ?> </p>
        </div>
    </div>
    <div class="card-one__logo-container">
        <img class="card-one__logo" src="<?php echo  $urlCompany_from_logo ?>" alt="<?php echo $company_from ?>">
    </div>
    <div class="card-one__body">
        <?php
        echo $testimonial_message;
        ?>
    </div>
</div>