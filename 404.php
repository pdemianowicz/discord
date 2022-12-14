<?php defined( 'ABSPATH' ) || exit; get_header(); ?>

	<section class="error-404 not-found">

		<h1 class="page-title"><?php esc_html_e( '404', 'template' ); ?></h1>

			<p class="page-content"><?php esc_html_e( 'It looks like nothing was found at this location. Perhaps you would like to go to our home page?', 'template' ); ?>&nbsp;</p>
			<a class="btn-404" href="<?php bloginfo('url') ?>">Go to home</a>

			<?php
				get_search_form();

				the_widget( 'WP_Widget_Recent_Posts' );
				?>
	</section>

<?php
get_footer();
