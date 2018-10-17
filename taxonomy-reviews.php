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
				<div class="inner-content-wrapper">
					<div class="content">
						<h1 class="h1 title"><? single_term_title();?></h1>
						
						<div class="reviews">
							<div class="reviews-list">

								
								<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
								<?$video = get_field('video');?>
								<div class="item">
									<a href="<?=$video?>" class="item-media item-media-video" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></a>
									<div class="item-content">
										<h4 class="h4 title">
											<a href="<? the_permalink();?>" class="link"><?the_title();?></a>
										</h4>
										<p class="p subtitle pre-line"><?the_excerpt();?></p>
										<div class="item-content-controls p-small subtitle">
											<a href="<?=$video?>" class="link link-accent">Видеоотзыв</a>
											<div class="date"><?the_date('j F Y');?></div>
											<a href="<? the_permalink();?>" class="link link-accent">Подробнее</a>
										</div>
									</div>					
							</div>
									<?php endwhile; ?>
									<?php endif; ?>			

									<?the_posts_pagination( array(
										'prev_text' => '',
										'next_text' => '',
										'screen_reader_text' => ' '
									) );
			            wp_reset_query();?>

				
							
						</div>
					</div>
				</div>
					<div class="navbar beige-fill">
						<div class="navbar-nav">
							<?
								wp_nav_menu( array(
									'theme_location'  => 'rewiews', 
									'menu'            => '', 
									'container'       => '', 
									'container_class' => '', 
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '', 
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul class="default-list">%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								) );
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?get_footer('');?>