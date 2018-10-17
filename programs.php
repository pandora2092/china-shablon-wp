<?/*
Template Name: Программы
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
			<div class="container">
				<div class="inner-content-wrapper">
					<div class="content">
						<h1 class="h1 title"><?the_title();?></h1>
						<p class="subtitle p">
							<?php while( have_posts() ) : the_post();
                the_content(); 
           		 endwhile; ?>
            </p>
						
						<div class="programs">
							<div class="programs-list">
								
									<?
							
										$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
										$offset = ($page-1)*3;

										$args = array( 
											'posts_per_page' => 3,
											'paged'=> $page,
											'post_type' => 'program',
											'offset' => $offset
										);

										query_posts($args);
										$current_page = $page; 
			                
			              while ( have_posts() ) : the_post(); ?>

										<div class="item" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
												<h3 class="h3 title"><?the_title();?></h3>
												<?the_content();?>
												<div class="btn-wrapper">
													<a href="<? the_permalink();?>" class="btn btn-accent">Посмотреть описание програмы</a>
												</div>
											</div>
								
									<? endwhile;?>
									<?the_posts_pagination( array(
										'prev_text' => '',
										'next_text' => '',
										'screen_reader_text' => ' ',
										'current'      => $current_page
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

						<div class="btn-wrapper">
		
							<?= do_shortcode('[nf-popup id=315]'); ?>
							<button class="programpopup btn btn-accent btn-small">Оставить заявку</button>

						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

<?get_footer();?>