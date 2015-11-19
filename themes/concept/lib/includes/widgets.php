<?php
function cp_sidebar(){

  register_sidebar(array(
    'name'          => __( 'Blog Sidebar', 'concept' ),
    'id'            => 'sidebar-blog',
    'description'   => __('Sidebar displayed in the single post pages', 'concept'),
    'before_widget' => '<div class="widget %2 clearfix">',
    'after_widget'  => '</div>',
    'before_title'  => '<h6 class="widgettitle"><strong>',
    'after_title'   => '</strong></h6>'
  ));

}

add_action('widgets_init', 'cp_sidebar');
