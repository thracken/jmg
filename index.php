<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="blog-post row">
  <div class="col-lg-2 col-xs-0"></div>

  <div class="col-lg-8 col-xs-12">
  <h1 class="clearfix"><span class="pull-left"><?php the_title(); ?></span> <small class="post-date pull-right"> <?php date_or_modified_date(); ?></small></h1>
    <div class="post-body">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="col-lg-2 col-xs-0"></div>
  </div><!-- .blog-post row -->

<?php endwhile; else : ?>

  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
