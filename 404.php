<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Count_Zero
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ">

			<section class="error-404 not-found container">
				<header class="page-header">
					<h1 class="page-title">
						<?php esc_html_e( 'CONTENT NOT FOUND', 'count-zero' ); ?>
                    </h1>
                    <h1 class="display-1">
                    	<?php esc_html_e( '404', 'count-zero' ); ?>
                    </h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="error-404">
					<?php
					get_search_form();
					?>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
