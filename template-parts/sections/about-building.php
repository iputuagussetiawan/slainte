<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageAboutID);
$about_welcome_title = get_field('about_welcome_title', $pagePeopleID);
?>
<section class="about-building">
    <div class="about-building__grid" data-aos="fade-up">
        <?php
        if (have_rows('our_building', $pageAboutID)) :
            while (have_rows('our_building', $pageAboutID)) : the_row();
                $our_building_title = get_sub_field('our_building_title', $pageAboutID);
                $our_building_image = get_sub_field('our_building_image', $pageAboutID);
                $our_building_description = get_sub_field('our_building_description', $pageAboutID);
                if ($our_building_image) :
                    $urlOur_building_image = $our_building_image['url'];
                else :
                    $urlOur_building_image = get_template_directory_uri() . '/src/images/blank-image.svg';
                endif;
                get_template_part('template-parts/components/cards/card', 'building', array(
                    'card-building-image' =>   $urlOur_building_image,
                    'card-building-title' =>  $our_building_title,
                    'card-building-description' =>  $our_building_description,
                ));
            endwhile;
        endif;
        ?>
    </div>
</section>