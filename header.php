<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <base href="/"> -->

	<title><?php bloginfo( 'description' ); ?></title>
	<meta name="<?php bloginfo( 'description' ); ?>" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="<?= get_template_directory_uri();?>/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri();?>/img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#fff">
	<!-- Custom Browsers Color End -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body class="home">

	<div class="preloader">
		<div class="preloader-logo">
		</div>
		<div class="preloader-text">Загрузка ...</div>
	</div>

	<header class="header">
		<div class="topLine wow fadeInDown">
			<div class="container">

				<div class="header-logo visible-xs">
					<a href="#" class="logo">
						<div class="logo-image">
							<?php
									$logo_footer = get_field('logo_footer', 'option');
									if($logo_footer) { ?>
										<img src="<?= $logo_footer ?>" alt="Red Planet - Гарантированное образование в Китае">
									<? } else { ?>
										<a href="/">logo</a>
									<? }
								?>
						</div>
						<div class="logo-text">
							<strong><?php bloginfo( 'name' ); ?></strong>
							<span><?php bloginfo( 'description' ); ?></span>
						</div>
					</a>
				</div>
				

				<div class="header-mmenu">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<div class="header-mmenu-title text-upper">меню</div>
				</div>

			

				<nav class="header-nav">
				<?
					wp_nav_menu( array(
						'theme_location'  => 'top', 
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
				<a href="#" class="btn-cross"></a>
				</nav>


				<div class="callback">
					<div class="callback-phone h5">
						<?php
							$phone_town = get_field('phone_town', 'option');
							if($phone_town) { ?>
								<a href="tel:<?= $phone_town ?>"><?= $phone_town ?></a>
						<? } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="middleLine">
			<div class="container">
				<div class="row align-items-center no-gutters">
					<div class="header-logo wow fadeInDown" data-wow-delay=".5s">
						<a href="#" class="logo">
							<div class="logo-image">
								<?php
									$logo = get_field('logo_main', 'option');
									if($logo) { ?>
										<img src="<?= $logo ?>" alt="Red Planet - Гарантированное образование в Китае">
									<? } else { ?>
										<a href="/">logo</a>
									<? }
								?>
							</div>
							<div class="logo-text">
								<strong><?php bloginfo( 'name' ); ?></strong>
								<span><?php bloginfo( 'description' ); ?></span>
							</div>
						</a>
					</div>

					<div class="header-info">
						<div class="callback visible-lg">
							<div class="callback-phone h5 wow fadeInDown" data-wow-delay=".8s">
								<?php
									if($phone_town) { ?>
										<a href="tel:<?= $phone_town ?>"><?= $phone_town ?></a>
								<? } ?>
									
							</div>
							<div class="callback-text p-small wow fadeInDown" data-wow-delay=".9s"><?=get_field('callback-text', 'option');?></div>
						</div>
	
						<div class="callback">
							<div class="callback-phone h5 wow fadeInDown" data-wow-delay="1.1s">
								<?php
									$phone_mobile = get_field('phone_mobile', 'option');
									if($phone_mobile ) { ?>
										<a href="tel:<?= $phone_mobile  ?>"><?= $phone_mobile  ?></a>
								<? } ?>
							</div>
							<div class="callback-text p-small wow fadeInDown" data-wow-delay="1.2s">
								<? $messenger = get_field('messenger', 'option');
								if ( is_array(get_field('messenger', 'option')) ) {?>
									<?php foreach ( $messenger as $key => $value ) { ?>
									<a href="<?= $value['link_mess']?>" class="link">
										<i class="<? echo 'ic' . ' ' . $value['icon']?>"></i>
										<span><?= $value['name_mess']?></span>
									</a>
									<?}?>	
								<?}?>	
								<?php unset($messenger);?>
							</div>
						</div>
					</div>
				</div>

				<div class="header-content">

					<?php while( have_posts() ) : the_post();
                the_content(); 
           		 endwhile; ?>
					
				</div>

				<div class="header-illustr">
					<div class="circle-small">
						<div class="circle wow bounceIn" data-wow-delay="1.5s"></div>
					</div>
					<div class="circle-medium">
						<div class="circle wow bounceIn" data-wow-delay="2.2s"></div>
					</div>
					<div class="circle-large">
						<div class="circle wow bounceIn" data-wow-delay="2.9s"></div>
					</div>
					<div class="girl">
						<div class="girl-photo wow slideInRight" data-wow-delay="1.2s"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
