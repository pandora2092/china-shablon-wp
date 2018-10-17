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
						<p class="subtitle p">
							<?php
							  $id = 13;
							  $post = get_post($id); 
							  $content = $post->post_content;
							  echo $content
							 ?>
						</p>
						
						<div class="programs">
							<div class="programs-list">

								<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
										<div class="item" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
												<h3 class="h3 title"><?the_title();?></h3>
												<?the_content();?>
												<div class="btn-wrapper">
													<a href="<? the_permalink();?>" class="btn btn-accent">Посмотреть описание програмы</a>
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
									'theme_location'  => 'aside', 
									'menu'            => '', 
									'container'       => '', 
									'container_class' => '', 
									'container_id'    => '',
									'menu_class'      => 'menu',
									'menu_id'         => '', 
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul>%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								) );
							?>

						</div>
						<div class="btn-wrapper">
							<a href="#"  data-fancybox="" data-src="#feedback-popup" class="btn btn-accent btn-small">Оставить заявку</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<?get_footer();?>