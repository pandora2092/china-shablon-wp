<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package china
 */

get_header('inner');
?>

	
<main>
	<section class="inner-content">
	<div class="container">
		<h1 class="h1 title"><?php esc_html_e( 'Такой страницы не существует.', 'china' ); ?></h1>
				<div class="page-content">

					<?php
					get_search_form();
					the_widget( 'WP_Widget_Recent_Posts' );
					?>

			</div>
	</div>
</section>
</main>

<?php
get_footer();
