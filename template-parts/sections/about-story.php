<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageAboutID);
$about_welcome_title = get_field('about_welcome_title', $pagePeopleID);
?>
<section class="about-story section-padding">
    <h2 class="page-header__title">Our Story Timeline</h2>
    <div class="container">
        <!-- <div class="about-story__grid">
            <?php
                $argsHistories = array(
                    'post_type' => 'histories',
                    'posts_per_page' => -1, // Number of posts to display
                );
                $historyQuery = new WP_Query($argsHistories);
                if ($historyQuery->have_posts()) :
                    while ($historyQuery->have_posts()) : $historyQuery->the_post();
                        // Display your post content here
                        $historyID=get_the_ID();
                        $historyYear=get_field('history_year', $historyID);
                        $historyTitle=get_the_title();
                        $historyLink=get_the_permalink();


                        get_template_part('template-parts/components/cards/card', 'story', array(
                            'card-story-title' =>  $historyTitle,
                            //'card-story-image' => $historyTitle,
                            //'card-story-description' => get_the_title(),
                            'card-story-link' => $historyLink,
                            'card-story-year' => $historyYear,
                        ));
                    endwhile;
                    wp_reset_postdata(); // Reset post data to the main loop
                else :
                    echo 'No Histories found.';
                endif;
            ?>
        </div> -->
        <div class="timeline">
            <ul class="timeline__list">
                    <?php
                        $argsHistories = array(
                            'post_type' => 'histories',
                            'posts_per_page' => -1, // Number of posts to display
                            'orderby'        => 'date', // Sort by date
                            'order'          => 'ASC',  // ASC for ascending, DESC for descending
                        );
                        $historyQuery = new WP_Query($argsHistories);
                        if ($historyQuery->have_posts()) :
                            while ($historyQuery->have_posts()) : $historyQuery->the_post();
                                // Display your post content here
                                $historyID=get_the_ID();
                                $historyYear=get_field('history_year', $historyID);
                                $historyTitle=get_the_title();
                                $historyLink=get_the_permalink();


                                get_template_part('template-parts/components/cards/card', 'story', array(
                                    'card-story-title' =>  $historyTitle,
                                    //'card-story-image' => $historyTitle,
                                    //'card-story-description' => get_the_title(),
                                    'card-story-link' => $historyLink,
                                    'card-story-year' => $historyYear,
                                ));
                            endwhile;
                            wp_reset_postdata(); // Reset post data to the main loop
                        else :
                            echo 'No Histories found.';
                        endif;
                    ?>
                <div style="clear:both;"></div>
            </ul>
        </div>
    </div>
</section>