<?php get_header(); ?>
<section id="news-list" class="section">
  <div class="container">
    <div class="row m-bottom-100">
      <div class="col-md-6">
        <h3><?php echo esc_html(cp_options('blog_title')); ?></h3>
        <div class="divider"></div>
      </div>
      <div class="col-md-6">
        <h6><?php echo esc_html(cp_options('blog_subtitle')); ?></h6>
      </div>
    </div>
    <div class="row">
      <?php

        if (get_query_var('s')) {
          $searchquery = new WP_Query(array(
            's' => get_query_var('s'),
            'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
            'post_type' => 'post'
          ));
        }

        if (!have_posts()) {
          echo '<div class="no-posts"><h2>'.__('No posts has been found!', 'concept') .'</h2></div>';
        }

        while(have_posts()) :

          the_post();
          get_template_part('partials/blog-post');

        endwhile;
        wp_reset_postdata(); ?>
    </div>
    <div class="row">
      <div class="col-md-12 wow fadeInUp">
        <div class="page-navigation">
          <?php echo cp_pagination(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
