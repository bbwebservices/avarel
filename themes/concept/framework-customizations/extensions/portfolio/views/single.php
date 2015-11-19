<?php

get_header();

$project_options = get_post_meta(get_the_ID(), 'fw_options', true);
$image = $project_options['cover']['url'];
if (!$project_options['cover']['url']) {
  $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
}

if (have_posts()) :
  the_post();

?>

<section id="head-single-work" class="section bg-single-work" style="background-image:url(<?php echo esc_attr($image); ?>);" data-stellar-background-ratio="0.5">
  <div class="overlay-grad-light"></div>
  <div class="container">
  <div class="row m-top-100">
      <div class="col-md-6">
        <h3><?php the_title(); ?></h3>
        <div class="divider"></div>
      </div>
    </div>
  </div>
</section>

<section id="single-work" class="section">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
      <div class="work-detail">
          <?php if ($project_options['client']): ?>
          <p><strong><?php _e('Client', 'concept') ?>:</strong><?php echo esc_html($project_options['client']); ?></p>
          <?php endif ?>
          <p><strong><?php _e('Date', 'concept') ?>:</strong><?php the_time('d F, Y'); ?></p>
          <?php if ($project_options['url']): ?>
          <p><strong><?php _e('Online', 'concept') ?>:</strong><a target="_blank" href="<?php echo esc_url($project_options['url']); ?>"><?php echo esc_html($project_options['url']); ?></a></p>
          <?php endif ?>
        </div>
      </div>
      <div class="col-sm-7">
        <p><?php echo esc_html($project_options['description']); ?></p>
      </div>
    </div>

    <?php the_content(); ?>

    <?php foreach ($project_options['steps'] as $step): ?>
    <div class="row m-top-40">
      <div class="col-sm-5 wow fadeInUp animated" style="visibility: visible;">
        <h5><?php echo esc_html($step['title']); ?></h5>
        <div class="divider"></div>
        <h6><?php echo esc_html($step['text']); ?></h6>
      </div>
      <div class="col-sm-7 wow fadeInUp animated" style="visibility: visible;">
        <img class="img-responsive" src="<?php echo esc_attr($step['image']['url']); ?>" alt="">
      </div>
    </div>
    <?php endforeach ?>

    <div class="row">
      <div class="col-md-12">
        <div class="work-navigation">
          <?php if (get_previous_post()): ?>
            <?php previous_post_link('%link', __('Previous', 'concept'), false); ?>
          <?php else: ?>
            <a href="#" class="work-prev disabled"><?php _e('Previous', 'concept'); ?></a>
          <?php endif; ?>
          <a href="<?php echo esc_url(home_url()); ?>" class="work-all"><?php _e('All Works', 'concept'); ?></a>
          <?php if (get_next_post()): ?>
            <?php next_post_link('%link', __('Next', 'concept'), false); ?>
          <?php else: ?>
            <a href="#" class="work-next disabled"><?php _e('Next', 'concept'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>
<?php

endif;
get_footer();
?>
