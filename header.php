<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="<?php bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>
    <nav id="header-navbar" class="navbar navbar-inverse navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" aria-expanded="false" data-toggle="collapse" data-target="#header-main-navbar-items" >
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo("wpurl"); ?>"><?php bloginfo("name"); ?></a>
      </div>

      <div class="collapse navbar-collapse" id="header-main-navbar-items">
        <ul class="nav navbar-nav navbar-right">
          <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container' => '' ) ); ?>
        </ul>
      </div><!-- #header-main-navbar-items -->
    </nav>
    <div id="wrapper" class="container-fluid">
