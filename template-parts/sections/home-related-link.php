<?php
$pageHomeID = get_field('home_link', 'page_link')->ID;
$pageHomeLink = get_permalink($pageHomeID);
?>
<section class="home-media section-padding">
    <div class="container-fluid">
        <div class="section-title-wrapper text-center" data-aos="fade-up">
            <h2 class="home-media__title">Related Link</h2>
        </div>
        <div class="home-media__grid" data-aos="fade-up">
            <?php
                if( have_rows('related_link_list',$pageHomeID) ):
                    while( have_rows('related_link_list',$pageHomeID) ) : the_row();
                        $related_link_image = get_sub_field('related_link_image');
                        $related_link_title = get_sub_field('related_link_title');
                        $related_link = get_sub_field('related_link');
                        $related_link_image_url= $related_link_image['url'];
                        get_template_part('template-parts/components/cards/card', 'one', array(
                            'card-one-image' =>  $related_link_image_url,
                            'card-one-title' =>  $related_link_title,
                            'card-one-link' =>  $related_link
                        ));
                    endwhile;
                else:
                    echo '<h3>Data Not Found</h3>';
                endif;
            ?>
        </div>
    </div>
</section>