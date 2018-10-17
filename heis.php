<?/*
Template Name: Вуз
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
			<section class="heis">
				<div class="container">
					<h1 class="h1 title"><?the_title();?></h1>
					<div class="p">
						<?php while( have_posts() ) : the_post();
                the_content(); 
            endwhile; ?>
                   
          </div>
					
					<div class="heis-list">
						<?
							global $wp_query;
							$q = $wp_query->query_vars;
							$per_page = $q['posts_per_page'];
							$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$offset = ($page-1)*$per_page;

							$args = array( 
								'posts_per_page' => $per_page,
								'paged'=> $page,
								'post_type' => 'heis',
								'offset' => $offset
							);

							query_posts($args);
							$current_page = $page; 
                
              while ( have_posts() ) : the_post(); ?>
				    	<div class="item">
				    			<?
									$photo_heis = get_field('photo_heis');
									if($photo_heis ) { ?>
										<div class="item-photo" style="background-image: url('<?= $photo_heis ?>');"></div>
									<? } ?>
												
										<div class="item-content">
											<h3 class="h3 title"><?the_title();?></h3>
											<div class="item-content-features">
												<ul class="features p-small">
													<li>
														<?
														$field_sity_obj = "sity";
														$field_sity = get_field_object($field_sity_obj);?>
														<span class="name"><?echo $field_sity['label'] . ': '?></span>
														<span class="value"><?= $field_sity['value']?></span>
													</li>
													<li>
														<?
														$field_course_obj = "course";
														$field_course = get_field_object($field_course_obj);?>
														<span class="name"><?echo $field_course['label'] . ': '?></span>
														<span class="value"><?= $field_course['value']?></span>
													</li>
													<li>
														<?
														$field_cost_obj = "cost";
														$field_cost = get_field_object($field_cost_obj);?>
														<span class="name"><?echo $field_cost['label'] . ': '?></span>
														<span class="value"><?= $field_cost['value']?></span>
													</li>
													<li>
														<?
														$field_level_obj = "level";
														$field_level = get_field_object($field_level_obj);?>
														<span class="name"><?echo $field_level['label'] . ': '?></span>
														<span class="value"><?= $field_level['value']?></span>
													</li>
												</ul>
											</div>
											<div class="btn-wrapper">
												<a href="<? the_permalink();?>" class="btn btn-border btn-small">Подробнее</a>
											</div>
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

		<!-- 			<div class="pagination">
						<ul>
							<li><a href="#" class="btn btn-accent btn-prev"></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="btn btn-accent btn-next"></a></li>
						</ul>
					</div> -->
				</div>
			</section>
		</div>
	</main>

<?get_footer();?>