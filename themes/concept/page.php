<?php

get_header();

if (have_posts()) : the_post(); ?>

<section id="<?php echo esc_html($post->post_name); ?>" class="section">
  <div class="container">
    <div class="row m-bottom-100">
      <div class="col-md-6">
        <h3><?php the_title(); ?></h3>
        <div class="divider"></div>
      </div>
    </div>
    <div class="row wow fadeInUp">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php

endif;

get_footer();
