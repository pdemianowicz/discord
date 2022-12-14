<?php defined( 'ABSPATH' ) || exit; get_header(); 

$results = [];

// phpcs:ignore WordPress.Security.NonceVerification.Recommended
if ( ! empty( $_GET['s'] ) && have_posts() ) {
  while ( have_posts() ) {
    the_post();
    $post_type = get_post_type();

    $results[ $post_type ]['posts'][] = [
      'title'     => (string) get_the_title(),
      'permalink' => (string) get_permalink(),
      'excerpt'   => (string) get_the_excerpt(),
    ];
  }
} wp_reset_postdata();

// Get post type objects for results
foreach ( $results as $slug => $post_type ) {
  $results[ $slug ]['object'] = (object) get_post_type_object( $slug );
  $results[ $slug ]['count']  = (int) count( $results[ $slug ]['posts'] );
}

get_header(); ?>

<main class="site-main search">
	<div class="container">

		<h1><?php echo esc_html( 'Search'  ); ?></h1>
    	<?php get_search_form(); ?>
  
		<?php if ( ! empty( $results ) ) : ?>
			<section class="search-results">


				<?php foreach ( $results as $slug => $post_type ) : ?>
				<div class="search-results-<?php echo esc_attr( $slug ) ?>">
					<h2>
					<?php echo esc_html( $post_type['object']->labels->name ); ?>&nbsp;
					(<?php echo esc_html( $post_type['count'] ); ?>)
					</h2>

					<?php foreach ( $post_type['posts'] as $post ) : ?>
					<div class="search-results-<?php echo esc_attr( $slug ) ?>">

						<div class="content">
						<h3>
							<a href="<?php echo esc_url( $post['permalink'] ) ?>">
							<?php echo esc_html( $post['title'] ) ?>
							</a>
						</h3>

						<p><?php echo wp_kses_post( $post['excerpt'] ) ?></p>
						</div>

					</div>

					<?php endforeach; ?>
				<?php endforeach; ?>

			</section>
		<?php endif; ?>

		<?php
		// "No results" message block
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( ! empty( $_GET['s'] ) && ! have_posts() ) : ?>
				<h2 class="no-results"><?php echo esc_html( 'No results found for your search'  ); ?>.</h2>
		<?php endif; ?>

  </div>
</main>

<?php get_footer();
