<?php
$pageHomeID = get_field('home_link', 'page_link')->ID;
$pageHomeLink = get_permalink($pageHomeID);
$behind_the_brand_title = get_field('behind_the_brand_title', $pageHomeID);
$behind_the_brand_description_ = get_field('behind_the_brand_description_', $pageHomeID);
$behind_the_brand_thumbnail = get_field('behind_the_brand_thumbnail', $pageHomeID);
$behind_the_brand_link_ = get_field('behind_the_brand_link_', $pageHomeID);

if ($behind_the_brand_thumbnail) :
	$urlBehind_the_brand_thumbnail = $behind_the_brand_thumbnail['url'];
else :
	$urlBehind_the_brand_thumbnail = get_template_directory_uri() . '/src/images/blank-image.svg';
endif;
?>
<section class="home-behind section-padding--top">
	<div class="container-fluid">
		<div class="home-behind__grid">
			<div class="home-behind__info-container" data-aos="fade-up">
				<h2 class="home-behind__title">
					<?= $behind_the_brand_title; ?>
				</h2>
				<p class="home-behind__description">
					<?= $behind_the_brand_description_; ?>
				</p>
				<!-- <a href="<?= $behind_the_brand_link_; ?>" class="btn btn-secondary">MEET THE TEAM</a> -->
			</div>
			<div class="home-behind__image-container">
				<img class="home-behind__image" src="<?= $urlBehind_the_brand_thumbnail; ?>" alt="<?= $behind_the_brand_title; ?>">
			</div>
		</div>
	</div>
</section>