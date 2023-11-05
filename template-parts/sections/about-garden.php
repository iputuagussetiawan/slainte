<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageAboutID);
$about_welcome_title = get_field('about_welcome_title', $pagePeopleID);
?>
<section class="about-garden">
    <div class="about-garden__grid">
        <?php
        if (have_rows('our_garden', $pageAboutID)) :
            while (have_rows('our_garden', $pageAboutID)) : the_row();
                $our_garden_title = get_sub_field('our_garden_title', $pageAboutID);
                $our_garden_image = get_sub_field('our_garden_image', $pageAboutID);
                $our_garden_description = get_sub_field('our_garden_description', $pageAboutID);
                if ($our_garden_image) :
                    $urlOur_garden_image = $our_garden_image['url'];
                else :
                    $urlOur_garden_image = get_template_directory_uri() . '/src/images/blank-image.svg';
                endif;
                get_template_part('template-parts/components/cards/card', 'garden', array(
                    'card-garden-image' =>   $urlOur_garden_image,
                    'card-garden-title' =>  $our_garden_title,
                    'card-garden-description' =>  $our_garden_description,
                ));
            endwhile;
        endif;
        ?>
    </div>
</section>