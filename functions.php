<?php

/*Custom date function for blog posts*/
function date_or_modified_date(){
  if ( get_the_date() == get_the_modified_date() ){
    $date = get_the_date();
    echo("Published " . $date);
  } else {
    $date = get_the_modified_date();
    echo("Modified " . $date);
  }
}

/*Adds footer widget area*/
function footer_widget_init() {
	register_sidebar( array(
		'name'          => 'Footer Sidebar',
		'id'            => 'footer-sideber',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}
add_action( 'widgets_init', 'footer_widget_init' );

?>
