<?/*
Template Name: Новости
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
			<section class="articles">
				<div class="container">
					<h1 class="h1 title"><?the_title();?></h1>

					<div class="articles-list">
						<?
							
						$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$offset = ($page-1)*9;

						$args = array( 
							'posts_per_page' => 9,
							'paged'=> $page,
							'post_type' => 'news',
							'offset' => $offset
						);

						query_posts($args);
						$current_page = $page; 
              
            while ( have_posts() ) : the_post(); ?>
						<article class="item">
							<a href="#" class="item-photo" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></a>
							<h5 class="item-title title h5">
								<a href="#" class="link link-accent"><?the_title();?></a>
							</h5>
							<div class="item-text p"><?the_excerpt();?></div>
							<div class="btn-wrapper">
								<a href="<? the_permalink();?>" class="btn btn-border btn-small">Подробнее</a>
							</div>
						</article>
						<? endwhile;?>
					</div>
					<?the_posts_pagination( array(
							'prev_text' => '',
							'next_text' => '',
							'screen_reader_text' => ' ',
							'current'      => $current_page
						) );
            wp_reset_query();?>
					
				</div>
			</section>
		</div>


	</main>

<?get_footer();?>