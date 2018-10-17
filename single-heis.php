<?get_header('inner');?>

	<main>
		<div class="hei-page">
			<div class="container">
				<div class="bread-crumbs p-small">
					<div id="br-crumb">
					<?php if (function_exists('wp_breadcrumbs')) wp_breadcrumbs(); ?>
					</div>
				</div>
			</div>
 			
			<?$photo_heis = get_field('photo_heis');
				if($photo_heis ) { ?>
				<div class="hei-page-banner" style="background-image: url('<?= $photo_heis ?>');">
				<? } else {?>	
				<div class="hei-page-banner">
				<?}?>
					<div class="container rellax" data-rellax-speed="1">
						<h1 class="h1 title"><?the_title();?></h1>
						<h4 class="h4 subtitle"><?=get_field('china_lang'); ?></h4>
					</div>
				</div>
			

			<section class="hei-page-about section section-white">
				<div class="container">
					<article class="block">
						<div class="block-content">
							<?php while( have_posts() ) : the_post();
                the_content(); 
            		endwhile; ?>
						</div>
						
						<div class="block-photo" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
						</div>

					</article>
				</div>
			</section>

			<?$table = get_field('table');
			if ( is_array(get_field('table')) ) {?>
			<section class="hei-page-pricelist section">
				<div class="container">
					<h2 class="h2 title t-center section-title"><?=get_field('title_table')?></h2>
					
					<div class="table">
						<table>
							<thead class="p">
								<tr>
									<th>
										Направление программы
									</th>
									<th>Длительность обучения</th>
									<th>На каком языке проходит обучение</th>
									<th>Стоимость</th>
								</tr>
							</thead>

							<tbody class="p-small">
							<?php foreach ( $table as $key => $td ) { ?>
								<tr>
									<td data-title="<?= $td['name']?>"><?= $td['name']?></td>
									<td data-title="<?= $td['time']?>"><?= $td['time']?></td>
									<td data-title="<?= $td['lang']?>"><?= $td['lang']?></td>
									<td data-title="<?= $td['cost_year']?>"><?= $td['cost_year']?></td>
								</tr>
							<?}?>	
							
							</tbody>
						</table>
					</div>
				</div>
			</section>
			<?}?>	

			<?$gallery = get_field('gallery_slider');?>
			<?php if ( is_array($gallery) ) {?>
			<section class="section section-white">
				<div class="container">
					<h2 class="h2 title t-center section-title"><?=get_field('title_slider')?></h2>
				</div>

				<div class="photo-gallery">
					<div class="owl-carousel owl-theme">
						
						<? foreach ( $gallery as $key => $item ) {?>
						<div class="item" style="background-image: url(<?php echo $item[ 'url' ];?>)">
							<div class="item-full" data-fancybox="photo-gallery" href="<?php echo $item[ 'url' ]; ?>"></div>
						</div>
					<?}?>

					</div>
				</div>
			</section>
			<?}?>
			<?php unset($gallery);?>

			<?$info_heis = get_field('info_heis'); ?>
			<?if($info_heis) { ?>
			<div class="hei-page-info">
				<div class="container">
					<?= $info_heis ?>
				</div>
			</div>
			<? } ?>

			<section class="tape tape-reverse signup">
				<div class="tape-stripe">
					<div class="container">
						<div class="tape-stripe-content">
							<div class="signup-form">
								<?= get_field('form_shortcode', 'option');?>
							</div>
						</div>
					</div>
				</div>
				<div class="tape-content">
					<div class="container">
						<div class="signup-content">
							<?= get_field('desc_form', 'option');?>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>

	<?get_footer();?>