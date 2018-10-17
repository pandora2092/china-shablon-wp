<?/*
Template Name: О компании
*/
?>
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
			<section class="section advantages">
				<div class="container">
					<div class="advantages-header">
						
						<?=get_field('block_desc')?>
						
					</div>
					
					<div class="advantages-list">
						<?$tizer = get_field('tizer');?>
						<?php foreach ( $tizer as $key => $value ) { ?>
						<div class="item">
							<div class="item-icons" style="background-image: url('<?= $value['photo_tizer']?>');"></div>
							<div class="item-title h5"><?= $value['title_tizer']?></div>
							<div class="item-text p"><?= $value['desc_tizer']?></div>
						</div>
						<?}?>	
					</div>
					
				</div>
			</section>

			<div class="tape about about-cert">
				<div class="tape-stripe">
					<div class="container">
						<div class="tape-stripe-content">
							<div class="about-content">
								<h3 class="h3 title c-white"><?=get_field('title_slider')?></h3>
								<div class="about-content-text">
									<p class="subtitle p pre-line"><?=get_field('desc_slider')?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="tape-content">
					<div class="about-slider">
						<div class="container">
							<div class="slider cert-cards">
								<div class="owl-carousel owl-theme">

										<? 	
										$gallery_sectificat = get_field('gallery_slider');
										?>
										<?php if ( is_array($gallery_sectificat) ) {?>

										<?foreach ( $gallery_sectificat as $key => $item ) {?>
										<a data-fancybox="certs" href="<?php echo $item[ 'url' ];?>" class="card" >
											<img src="<?php echo $item[ 'url' ];?>" alt="">
										</a>
										<?}?>
									<?}?>
					
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

		 	<article class="article">
				<div class="container">
					<div class="article-content">
						<h2 class="h2 title"><?the_title();?></h2>
						<?php while( have_posts() ) : the_post();
                the_content(); 
           		 endwhile; ?>
					</div>

					<div class="article-media">

						<?$dop_photo = get_field('dop_photo');?>
							<?php if ( is_array($dop_photo) ) {?>
								<?foreach ( $dop_photo as $key => $item ) {?>
								<a data-fancybox="article-media" href="<?php echo $item[ 'url' ];?>" class="photo photo-medium" >
									<img src="<?php echo $item[ 'url' ];?>" alt="">
								</a>
							<?}?>
						<?}?>
					</div>

				</div>
			</article> 

		</div>
	</main>

<?get_footer();?>