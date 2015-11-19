<?php

/* Function to get theme options */
if (!function_exists('cp_options')) {
  function cp_options($value){
    global $cp_options;
    if (isset($cp_options[$value])) {
      return $cp_options[$value];
    } else{
      return false;
    }
  }
}

/* Access post meta easily */
function cp_meta($id, $key){
  return get_post_meta( $id, 'cp_'.$key, true);
}

function cp_get_image_id( $attachment_url = '' ) {
  global $wpdb;
  if (strpos($attachment_url,'http://') === false){
    $attachment_url = 'http:'.$attachment_url;
  }
  $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$attachment_url'";
  $id = $wpdb->get_var($query);
  return $id;
}

/* Pagination */
function cp_pagination() {
  global $wp_query;
  $big = 999999999;
  $pages = paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages,
          'type'  => 'array',
          'prev_next'   => false
      ) );
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $total_pages = (count($pages) == 0) ? '1' : count($pages);

    previous_posts_link(__('Previous', 'concept'));
    if (!get_previous_posts_link(__('Previous', 'concept'))) {
      echo '<a href="#" class="page-prev inactive">'.__('Previous', 'concept').'</a>';
    }
    echo '<span class="page-all">'.__('Page', 'concept').' '. $paged .' of '. $total_pages .'</span>';
    next_posts_link(__('Next', 'concept'));
    if (!get_next_posts_link(__('Next', 'concept'))) {
      echo '<a href="#" class="page-next inactive">'.__('Next', 'concept').'</a>';
    }
}

/* Comments template */
function cp_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment; ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
    <div <?php comment_class(); ?> class="comment">

      <div class="col-xs-2 author-avatar">
        <?php echo get_avatar( $comment, 80 ); ?>
      </div>
      <div class="col-xs-10">
        <h5><?php echo get_comment_author_link(); ?></h5>
        <span class="comment-date"><?php _e('Posted on', 'concept'); ?> <?php echo get_comment_date(); ?> <?php _e('at', 'concept'); ?> <?php echo get_comment_time(); ?></span>
        <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.', 'concept') ?></em>
        <?php endif; ?>
        <?php comment_text(); ?>
        <?php
        comment_reply_link( array_merge( $args, array(
          'reply_text' => __('Reply', 'concept'),
          'depth' => $depth,
          'max_depth' => $args['max_depth']
        ) ) ); ?>
      </div>
    </div>
    <?php
}

/* Disable update notifications for Unyson plugin */
function filter_plugin_updates( $value ) {
  if (isset($value->response['unyson/unyson.php'])) {
    unset( $value->response['unyson/unyson.php'] );
  }
  return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );


