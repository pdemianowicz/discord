<?php  defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

get_header();


if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    
    if (get_the_post_thumbnail_url()){ 
        ?><div class="thumbnail-container" style="height:50vh;background:url(<?php echo get_the_post_thumbnail_url(); ?>)  center / cover no-repeat;"></div>
    <?php } else {
        ?><div class="thumbnail-container" style="height:20vh;"></div>
    <?php } ?>
    
    <div class="container-post" style="margin-top:-100px">
        <header>

			<?php  if ( has_category() ) {
                 ?>
					<div class="container-post__categories">
						<span class="screen-reader-text"><?php _e( 'Categories', 'picostrap' ); ?></span>
						<?php the_category( ' ' ); ?>
                    </div>
                <?php
                } ?>
				
            <h1 class="container-post__title"><?php the_title(); ?></h1>
                <div class="post-meta" id="single-post-meta">
                    <span class="post-meda__date"><?php the_date(); ?> </span>
                    <span class="post-meta__author"> <?php _e( 'by', 'picostrap' ) ?> <?php the_author(); ?></span>
                </div> 

		</header>
		
        <div class="container-content">
                <?php 
                
                the_content();
                
                edit_post_link( __( 'Edit this post', 'picostrap' ), '<p class="text-end">', '</p>' );
                
              	// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				} 
                
                ?>
        </div>
    </div>

	<?php
    endwhile;
 		else :
    		 _e( 'Sorry, no posts matched your criteria.', 'picostrap' );
 	endif;
 	?>



<?php get_footer();
