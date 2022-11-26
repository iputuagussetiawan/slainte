<?php
get_header();
$postDate = new DateTime(get_the_date());
?>
<main>
    <section class="single-news section-padding">
        <div class="container">
            <div class="single-news__grid">
                <div class="single-news__inner">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            wpb_set_post_views(get_the_ID());
                    ?>
                            <div class="section-title-wrapper text-center">
                                <p class="section-title__subtitle">Case Studies</p>
                                <h1 class="section-title"><?php the_title() ?></h1>
                                <p class="section-title__description"><?php echo $postDate->format('F d, Y'); ?> </p>
                            </div>
                            <?php
                            $caseStudyThumbnail = get_field('case_study_thumbnail', get_the_ID());
                            if ($caseStudyThumbnail) :
                                $urlCaseStudyThumbnail = $caseStudyThumbnail['url'];
                            else :
                                $urlCaseStudyThumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                            endif
                            ?>
                            <div class="single-news__image-container">
                                <img class="single-news__image" src="<?php echo $urlCaseStudyThumbnail ?>" alt="<?php the_title() ?>">
                            </div>
                            <div class="single-news__content">
                                <?php
                                the_content()
                                ?>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="case-studies-result section-padding">
        <div class="case-studies-result__bg-container">
            <picture>
                <source media="(min-width:992px)" srcset="<?php echo get_template_directory_uri() . '/src/images/case-studies/case-studies.png'; ?>">
                <img class="case-studies-result__bg" src="<?php echo get_template_directory_uri() . '/src/images/case-studies/case-studies-mobile.png'; ?>" alt="case studies result">
            </picture>
        </div>
        <div class="container">
            <div class="case-studies-result__grid">
                <div class="case-studies-result__info-container">
                    <div class="section-title-wrapper">
                        <h2 class="section-title text-white">Results</h2>
                    </div>
                    <ul class="case-studies-result__list">
                        <?php
                        if (have_rows('case_studies_result_list', get_the_ID())) :
                            while (have_rows('case_studies_result_list', get_the_ID())) : the_row();
                                $case_study_result = get_sub_field('case_study_result');
                        ?>
                                <li class="case-studies-result__item">
                                    <?php echo  $case_study_result ?>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="quotes section-padding">
        <div class="container">
            <div class="quotes__grid">
                <div class="quotes__inner">
                    <?php if (have_rows('case_studies_quote', get_the_ID())) : ?>
                        <?php while (have_rows('case_studies_quote', get_the_ID())) : the_row(); ?>
                            <?php if (get_row_layout() == 'quote') : ?>
                                <div class="card-quote">
                                    <div class="card-quote__content">
                                        <?php the_sub_field('quote_user_message'); ?>
                                    </div>
                                    <div class="card-quote__info-container">
                                        <div class="card-quote__user-info">
                                            <h4 class="card-quote__user-name"><?php the_sub_field('quote_user'); ?></h4>
                                            <p class="card-quote__user-position"><?php the_sub_field('quote_user_position'); ?></p>
                                        </div>

                                        <div class="card-quote__icon-container">
                                            <svg class="card-quote__icon" width="57" height="42" viewBox="0 0 57 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M43.311 41.4277C46.3239 41.4277 48.8765 40.7163 50.9688 39.2935C52.9774 37.8708 54.4839 35.9877 55.4882 33.6443C56.4088 31.3009 56.8691 28.7902 56.8691 26.112C56.8691 22.2622 56.0741 18.6215 54.4839 15.1902C52.8101 11.7588 50.6759 8.74585 48.0814 6.15139C45.4033 3.47323 42.5159 1.42277 39.4193 0L30.7571 6.40246C33.0168 7.40677 35.151 8.62031 37.1596 10.0431C39.1682 11.3822 40.9258 12.8886 42.4322 14.5625C43.855 16.2363 44.943 17.952 45.6962 19.7095L45.0685 20.0862C44.5664 19.7514 44.0224 19.5003 43.4365 19.3329C42.767 19.1655 41.8882 19.0818 40.8002 19.0818C39.2938 19.0818 37.7873 19.4585 36.2808 20.2117C34.6907 20.9649 33.3934 22.0948 32.3891 23.6012C31.3011 25.1077 30.7571 27.0326 30.7571 29.376C30.7571 31.9705 31.343 34.1883 32.5147 36.0295C33.6864 37.7871 35.2347 39.1262 37.1596 40.0468C39.0845 40.9674 41.135 41.4277 43.311 41.4277ZM12.5541 41.4277C15.567 41.4277 18.1196 40.7163 20.2119 39.2935C22.2205 37.8708 23.727 35.9877 24.7313 33.6443C25.6519 31.3009 26.1122 28.7902 26.1122 26.112C26.1122 22.2622 25.3171 18.6215 23.727 15.1902C22.0531 11.7588 19.919 8.74585 17.3245 6.15139C14.6464 3.47323 11.759 1.42277 8.66237 0L0.000217438 6.40246C2.25991 7.40677 4.39407 8.62031 6.40268 10.0431C8.41129 11.3822 10.1688 12.8886 11.6753 14.5625C13.0981 16.2363 14.1861 17.952 14.9393 19.7095L14.3116 20.0862C13.8094 19.7514 13.2654 19.5003 12.6796 19.3329C12.0101 19.1655 11.1313 19.0818 10.0433 19.0818C8.53683 19.0818 7.03037 19.4585 5.52391 20.2117C3.93375 20.9649 2.63652 22.0948 1.63221 23.6012C0.544216 25.1077 0.000217438 27.0326 0.000217438 29.376C0.000217438 31.9705 0.586063 34.1883 1.75776 36.0295C2.92945 37.7871 4.47776 39.1262 6.40268 40.0468C8.3276 40.9674 10.3781 41.4277 12.5541 41.4277Z" fill="#30344D" fill-opacity="0.3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (get_row_layout() == 'quote_contents') :
                                $quote_content = get_sub_field('quote_content');
                            ?>
                                <div class="quotes__content">
                                    <?php echo $quote_content ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
    </section>

    <section class="related-case-studies section-padding">
        <div class="container">
            <div class="related-case-studies__grid">
                <?php
                if (have_rows('work_with_list', get_the_ID())) :
                    while (have_rows('work_with_list', get_the_ID())) : the_row();
                        $work_with_title = get_sub_field('work_with_title');
                        $work_with_title = get_sub_field('work_with_title');
                        $work_with_thumbnail = get_sub_field('work_with_thumbnail');
                        $work_with_link = get_sub_field('work_with_link');
                        if ($work_with_thumbnail) :
                            $urlwork_with_thumbnail = $work_with_thumbnail['url'];
                        else :
                            $urlwork_with_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;
                        get_template_part('template-parts/components/cards/card', 'nine', array(
                            'card-nine-image' =>   $urlwork_with_thumbnail,
                            'card-nine-link' =>  $work_with_link,
                            'card-nine-title' => $work_with_title
                        ));
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>