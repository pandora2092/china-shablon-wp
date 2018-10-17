<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package china
 */

get_header();
?>

	<main>
		<section class="section advantages">
			<div class="container">
				
				<?=get_field('text_top');?>
				
				<div class="advantages-list">

					
						<?$tizer2 = get_field('tizer');?>
						<?php foreach ( $tizer2 as $key => $value ) { ?>
						<div class="item wow fadeInDown" data-wow-offset="200" data-wow-delay=".4s">
							<div class="item-icons" style="background-image: url('<?= $value['photo_tizer']?>');"></div>
							<div class="item-title h5"><?= $value['title_tizer']?></div>
							<div class="item-text p"><?= $value['desc_tizer']?></div>
						</div>
						<?}?>						

				</div>
			</div>
		</section>

		<div class="tape about about-hei about--large">
			<div class="tape-stripe wow slideInLeft" data-wow-offset="300">
				<div class="container">
					<div class="tape-stripe-content wow fadeIn" data-wow-delay="1.2s" data-wow-offset="300">
						<div class="about-content">
							<?= get_field('about_heis_main', 15);?>
						</div>
					</div>
				</div>
			</div>
			<div class="tape-content">
				<div class="about-slider">
					<div class="container">
						<div class="slider hei-cards">
							<div class="owl-carousel owl-theme wow">

								<?$posts = get_posts( array(
									'numberposts' => 10000, 
									'category'    => 0,
									'orderby'     => 'date',
									'order'       => 'DESC',
									'include'     => array(),
									'exclude'     => array(),
									'meta_key'    => '',
									'meta_value'  =>'',
									'post_type'   => 'heis',
									'suppress_filters' => true, запроса
								) );

								foreach( $posts as $post ){
									setup_postdata($post);
								?>


								<div class="card wow slideInRight" data-wow-delay="0" data-wow-offset="300">
									<div class="card-photo" style="background-image: url('<?= get_field('photo_heis') ?>');"></div>
									<div class="card-content">
										<?= get_field('slider_heis_main') ?>
										

										<div class="btn-wrapper">
											<a href="<?the_permalink();?>" class="btn btn-border btn-small">Подробнее</a>
										</div>
									</div>
								</div>
								<?}?>

								<?wp_reset_postdata(); ?>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="section advantages advantages-bg">
			<div class="container">

				<?= get_field('title_why');?>
				
				
				<div class="advantages-list">

					<?$why= get_field('why');?>
						<?php foreach ( $why  as $key => $value ) { ?>
						<div class="item wow fadeInDown" data-wow-offset="200" data-wow-delay=".4s">
							<div class="item-icons" style="background-image: url('<?= $value['profit_photo']?>');"></div>
							<div class="item-title h5"><?= $value['profit_title']?></div>
							<div class="item-text p"><?= $value['profit_desc']?></div>
						</div>
						<?}?>		
					

				</div>
			</div>
		</section>

		<section class="faq">
			<div class="container">

				<h2 class="h2 title t-center wow fadeInDown" data-wow-offset="300">
					<?
					$field_questions_obj = "questions";
					$field_questions = get_field_object($field_questions_obj);?>
					<?echo $field_questions['label']?>
				</h2>

				
				<dl class="accordion">

					<?$questions = get_field('questions');?>
						<?php foreach ( $questions  as $key => $value ) { ?>

					<div class="item wow flipInX" data-wow-offset="200" data-wow-delay=".4s">
						<dt class="item-head h5"><?= $value[ 'question' ];?></dt>
						<dd class="item-content">
							<p class="p pre-line"><?= $value[ 'answer' ];?></p>
						</dd>
					</div>
					<?}?>

				</dl>
			</div>
		</section>

		<div class="tape tape-reverse about about-reviews about--large">
		
			<div class="tape-stripe wow slideInRight" data-wow-offset="300">
				<div class="container">

					<div class="tape-stripe-content wow fadeIn" data-wow-delay="1.2s" data-wow-offset="300">
						<div class="about-content">
							<h3 class="h3 title c-white">Видео отзывы</h3>
							<div class="about-content-text">
								<p class="subtitle p pre-line">Ниже вы можете посмотреть видеоотзывы <br>наших клиентов</p>
							</div>
	
							<div class="about-content-persone">
								<div class="h4 title c-white">Наталья Картышнева</div>
								<div class="p-small">студентка 21 год (Волгоград)</div>
							</div>
	
							<div class="about-content-text">
								<p class="subtitle p pre-line">Про «Шанхайский Университет Иностранных Языков / Shanghai International Studies University»</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tape-content">
				<div class="about-slider">
					<div class="container">
						<div class="slider reviews">
							<div class="owl-carousel owl-theme wow">
							
									<a data-fancybox href="https://www.youtube.com/embed/_yY-uRMHeAU" class="video wow slideInLeft popup-video" data-wow-delay="0" data-wow-offset="300">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/_yY-uRMHeAU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</a>
		
									<a data-fancybox href="https://www.youtube.com/embed/_yY-uRMHeAU" class="video wow slideInLeft popup-video" data-wow-delay="0.2s" data-wow-offset="300">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/_yY-uRMHeAU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</a>
								</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<section class="students">
			<div class="container">
				<h2 class="h2 title t-center wow fadeInDown" data-wow-offset="300"><?= get_field('h1_student');?></h2>
				
				<div class="students-slider">
					<div class="owl-carousel owl-theme wow">

						<?$student = get_field('student');?>
						<?php foreach ( $student  as $key => $value ) { ?>

						<div class="card wow fadeIn" data-wow-offset="200" data-wow-delay=".4s">
							<div class="card-photo" style="background-image: url(<?php echo $value[ 'photo_student' ];?>);"></div>
							<div class="card-content">
								<div class="card-content-title h5 title"><?= $value['fio']?></div>
								<div class="card-content-text p-small"><?= $value['vuz']?></div>
								<div class="card-content-links p-small">
									<a href="<?= $value['link']?>" class="link">
										<i class="ic ic-vk"></i>
										<span>Профиль</span>
									</a>
								</div>
							</div>
						</div>
					<?}?>

					</div>
				</div>
			</div>
		</section>

		<section class="tape tape-reverse signup">
			<div class="tape-stripe">
				<div class="container">
					<div class="tape-stripe-content">
						<div class="signup-form form_bottom">
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

	</main>

<?php
get_footer();?>
