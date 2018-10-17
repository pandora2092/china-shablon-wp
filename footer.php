<footer class="footer p-small">
		<div class="container">
			<div class="contentLine">
				<div class="footer-logo">
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
					<div class="footer-logo-text"><?=get_field('footer-logo-text', 'option');?></div>

					<div class="socials">
						<?
							wp_nav_menu( array(
								'theme_location'  => 'social', 
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
								'items_wrap'      => '<ul class="default-list socail-menu">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) );
						?>
					</div>
				</div>

				<nav class="footer-nav">
					<?
					wp_nav_menu( array(
						'theme_location'  => 'bottom', 
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
						'items_wrap'      => '<ul class="default-list">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) );
				?>

				</nav>

				<div class="footer-info">
					<div class="callback">
						<div class="callback-phone h4">
							<?
								$phone_town = get_field('phone_town', 'option');
								if($phone_town) { ?>
									<a href="tel:<?= $phone_town ?>"><?= $phone_town ?></a>
							<? } ?>
						</div>
						<div class="callback-text">
							
							<?= do_shortcode('[nf-popup id=287]'); ?>
							<button id="popupnj" class="btn btn-accent">Заказать звонок</button>
							
						</div>
					</div>
					
					<div class="address">
						<div class="address-title text-upper c-white">Адрес</div>
						<div class="address-text"><?= get_field('address', 'option')?></div>
					</div>
				</div>
			</div>


			<div class="bottomLine">
				<div class="footer-privacy">
					<div class="privacy">
						<?$policy = get_field('policy', 'option');
							if($policy) { ?>
								<?= $policy ?>
						<? } ?>
					</div>
				</div>
			</div>
		</div>
	
	</footer>

	<div class="body-shadow"></div>

	<?php wp_footer(); ?>
</body>
</html>

