<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <div class="blog-post row">
      <div class="col-lg-2 col-xs-1"></div>

      <div class="col-lg-8 col-xs-10">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>

      <div class="col-lg-2 col-xs-1"></div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
