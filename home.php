<?php defined( 'ABSPATH' ) || exit;  get_header();  // Exit if accessed directly. ?>   
 

<section class="blog-header">
  <div class="container">
    <h1><?php bloginfo('Name') ?></h1>
  </div>
</section>

<section class="blog-content">
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
</section>
 
<?php get_footer();
