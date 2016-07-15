<?php
add_theme_support("post-thumbnails");

add_theme_support("menus"); 

register_sidebar(array(
  'name' => __( 'Prawy sidebar' ),
  'id' => 'prawy-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div><!-- widget end -->'
)); 
 ?>