<?/*
Template Name: Контакты
*/
?>
<?get_header('inner');?>

	<main class="contact-page">
		<div class="container">
			<div class="bread-crumbs p-small">
				<div id="br-crumb">
					<?php if (function_exists('wp_breadcrumbs')) wp_breadcrumbs(); ?>
				</div>
			</div>
		</div>

		<section class="tape tape-reverse signup">
			<div class="tape-stripe">
				<div class="container">
					<div class="tape-stripe-content">
						<div class="signup-form">
							<?= get_field('form_shortcode');?>
							
						</div>
					</div>
				</div>
			</div>
			<div class="tape-content">
				<div class="container">
					<div class="signup-content">
						<h1 class="h1 title"><?the_title(); ?></h1>
							<?php while( have_posts() ) : the_post();
                the_content(); 
           		 endwhile; ?>

					</div>


				</div>
				<div class="maps hidden-md">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577325.3463907349!2d36.82514037230105!3d55.58152448127186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1539157113881" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</section>

		<div class="maps visible-md">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577325.3463907349!2d36.82514037230105!3d55.58152448127186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1539157113881" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</main>

<?get_footer();?>
