<?php defined( 'ABSPATH' ) || exit; get_header(); ?>
  
<header>
	<?php
		the_archive_title( '<h1 class="archive-title">', '</h1>' );
	?>
</header>

<div class="container container-archive">
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                ?>
                <article class="card-post">
					<a href="<?php the_permalink() ?>">

						<?php the_post_thumbnail( 'medium' ) ?>
						<h2><?php the_title() ?></h2>
						
                    </a>
				</article>
                <?php
                
            endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
        ?>

</div>
 
<?php get_footer();
