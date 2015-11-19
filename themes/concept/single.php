<?php get_header();

$posts_page = get_option('page_for_posts');

if ( have_posts() ) :

    the_post();

  $post_format = '';
  if (get_post_format() != '') {
    $post_format = 'post-format-'.get_post_format();
  }
?>

<section id="news-post" class="section <?php echo esc_html($post_format); ?>">
  <div class="container">
    <div class="row m-bottom-100">
      <div class="col-md-8">
        <h3><?php the_title(); ?></h3>
        <div class="divider"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 wow fadeInUp">
        <div class="news-detail">
          <p><strong><?php _e('Posted on:', 'concept'); ?></strong><?php the_time(get_option('date_format')); ?></p>
          <p><strong><?php _e('Author:', 'concept'); ?></strong><?php the_author_link(); ?></p>
          <p><strong><?php _e('Category:', 'concept'); ?></strong><?php the_category(', '); ?></p>
          <p>
            <strong><?php _e('Share:', 'concept'); ?></strong>
            <a class="share-btn" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(esc_url(get_permalink())) ?>">Facebook</a> /
            <a class="share-btn" href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post->post_title); ?>&url=<?php echo urlencode(esc_url(get_permalink())); ?>">Twitter</a> /
            <a class="share-btn" href="http://plus.google.com/share?url=<?php echo esc_url(get_permalink());?>">Google+</a></p>
        </div>
        <?php if( is_active_sidebar('sidebar-blog') ): ?>
        <div id="sidebar">
          <?php dynamic_sidebar('sidebar-blog'); ?>
        </div>
        <?php endif ?>
      </div>
      <div class="col-md-9 wow fadeInUp">
        <div <?php post_class(); ?>>
          <?php if (has_post_thumbnail()): ?>
            <p><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?></p>
          <?php endif ?>
          <!-- Post Content -->
          <?php the_content(); ?>
          <?php wp_link_pages(array('before' => '<div class="post-pages">' . __('Pages:', 'concept'), 'after' => '</div>')); ?>
        </div>
        <div class="post-tags">
          <?php the_tags('','',''); ?>
        </div>
        <?php comments_template(); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="page-navigation">
          <?php if (get_previous_post_link()): ?>
            <div class="page-prev"><?php previous_post_link('%link', __('Previous', 'concept'), false); ?></div>
          <?php else: ?>
            <a href="#" class="page-prev inactive"><?php _e('Previous', 'concept') ?></a>
          <?php endif ?>
          <a href="<?php echo esc_url(get_page_link($posts_page)); ?>" class="page-all"><?php _e('All posts', 'concept') ?></a>
          <?php if (get_next_post_link()): ?>
            <div class="page-next"><?php next_post_link('%link', __('Next', 'concept'), false); ?></div>
          <?php else: ?>
            <a href="#" class="page-next inactive"><?php _e('Next', 'concept') ?></a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

endif;
wp_reset_postdata();
get_footer();
