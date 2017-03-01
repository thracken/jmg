<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="blog-post">
  <h1 class="clearfix"><span class="pull-left"><?php the_title(); ?></span> <small class="post-date pull-right"> <?php date_or_modified_date(); ?></small></h1>
    <div>
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; else : ?>

  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
