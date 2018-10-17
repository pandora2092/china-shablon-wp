<?get_header('inner');?>

	<main>
		<div class="container">
			<div class="bread-crumbs p-small">
				<div id="br-crumb">
				<?php if (function_exists('wp_breadcrumbs')) wp_breadcrumbs(); ?>
				</div>
			</div>
		</div>

		<div class="inner-content">
			<div class="container">
				<h1 class="h1 title"><?the_title(); ?></h1>

				<div class="p">
					<?php while( have_posts() ) : the_post();
          the_content(); 
          endwhile; ?> 	
        </div>
			</div>
		</div>


	</main>

	<?get_footer('');?>