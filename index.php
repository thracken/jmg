<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <link href="<?php bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
    <?php wp_footer(); ?>
  </body>
</html>
