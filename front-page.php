<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <div id="front-page-content" class="page-content row">
      <div class="col-lg-2 col-xs-1"></div>

      <div class="col-lg-8 col-xs-10">
        <?php the_content(); ?>
      </div>

      <div class="col-lg-2 col-xs-1"></div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
