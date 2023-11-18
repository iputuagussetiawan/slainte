<?php
$pageWineMakerID = get_field('winemaker_link', 'page_link')->ID;
$pageWineMakerLink = get_permalink($pageWineMakerID);
$team_maker_description = get_field('team_maker_description', $pageWineMakerID);
?>
<section class="winemaker-teams section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="winemaker-teams__description" data-aos="fade-up">
                    <?= $team_maker_description; ?>
                </h3>
            </div>
        </div>
        <div class="winemaker-teams__grid" data-aos="fade-up" data-aos-delay="400">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 12,
                'post_type' => 'team',
                'post_status'   => 'publish',
                'paged'   => $paged,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'team-position',
                        'field' => 'slug',
                        'terms' => array('wine-maker'),
                        'operator' => 'IN'
                    )
                )
            );

            $team = new WP_Query($args);
            if ($team->have_posts()) :
                while ($team->have_posts()) :
                    $team->the_post();
                    $team_title = get_the_title();
                    $team_thumbnail = get_field('team_thumbnail');
                    $team_position = get_field('team_position');
                    $team_facebook_link = get_field('team_facebook_link');
                    $team_twitter_link = get_field('team_twitter_link');
                    $team_linkedin_link = get_field('team_linkedin_link');
                    if ($team_thumbnail) :
                        $urlTeam_thumbnail = $team_thumbnail['url'];
                    else :
                        $urlTeam_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                    endif;
                    if (has_excerpt()) :
                        $teamDescription = get_the_excerpt();
                    else :
                        $teamDescription = wp_trim_words(get_the_content(), 100);
                    endif;
                    get_template_part('template-parts/components/cards/card', 'team-two', array(
                        'card-team-image' =>   $urlTeam_thumbnail,
                        'card-team-title' =>  $team_title,
                        'card-team-description' =>  $teamDescription,
                        'card-team-position' =>   $team_position,
                        'card-team-fb-link' =>   $team_facebook_link,
                        'card-team-twt-link' =>   $team_twitter_link,
                        'card-team-lnk-link' =>  $team_linkedin_link,
                    ));
                endwhile;
                wp_reset_postdata();
            else :
                get_template_part('template-parts/components/not', 'found');
            endif;
            ?>
        </div>
    </div>
</section>