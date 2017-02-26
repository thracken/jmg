<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="blog-post">
  <h1><?php the_title(); ?> <br /><small> <?php date_or_modified_date(); ?></small></h1>
    <?php the_content(); ?>
  </div>

<?php endwhile; else : ?>

  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
