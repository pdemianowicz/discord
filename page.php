<?php defined( 'ABSPATH' ) || exit; get_header(); ?>


<div class="container-page">
        <h1 class="container-page__title"><?php the_title(); ?></h1>
		<div class="container-page__content">

			<?php
			if ( have_posts() ) : 
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			else :
				_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
			endif;
			?>

		</div>
</div>



<?php get_footer();

