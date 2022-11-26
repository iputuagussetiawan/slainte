<?php get_header(); ?>
<main>
	<section class="page404 section-padding">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 text-center">
					<div class="section-title-wrapper">
						<?php
						$pageThankID = get_field('thank_you_link', 'page_link')->ID;
						$pageThankLink = get_permalink($pageThankID);
						$page_thank_you_title = get_field('page_thank_you_title', $pageThankID);
						$page_thank_you_description = get_field('page_thank_you_description', $pageThankID);
						?>
						<h1 class="page404__title">404<br />Page Not Found</h1>
						<p class="section-title__description">The page you are looking for doesn't exist or has been moved</p>
					</div>
					<a href="<?php echo site_url(); ?>" class="btn btn-primary">Back to homepage</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>