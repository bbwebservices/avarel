<div id="grid-items" data-columns="">
<?php
  $args = array('post_type' => 'fw-portfolio', 'orderby'=> 'post__in', 'posts_per_page' => '-1', 'order' => 'ASC');
  $mainquery = new WP_query($args);
  if( $mainquery->have_posts()) :
    while ($mainquery->have_posts()) : $mainquery->the_post();
      $cats = get_the_terms(get_the_ID(), fw()->extensions->get('portfolio')->get_taxonomy_name());
      $project_category = '';
      if($cats){
        foreach($cats as $cat) {
          $project_category  .= $cat->name . ', ';
        }
        $project_category = rtrim($project_category, ', ');
      } ?>
    <a href="<?php the_permalink(); ?>">
      <div class="work-item">
        <?php the_post_thumbnail('portfolio-thumb', array('alt' => strip_tags(get_the_title()))); ?>
        <div class="caption">
          <p class="extra"><?php echo esc_html($project_category); ?></p>
          <div class="titles">
            <h4 class="title"><?php the_title(); ?></h4>
            <div class="divider"></div>
          </div>
        </div>
      </div>
    </a>
   <?php
   endwhile;
  endif;
  wp_reset_postdata();
  ?>
</div>
