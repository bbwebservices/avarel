<?php
$class = (!has_post_thumbnail()) ? 'no-thumb' : 'has-thumb';
$category = get_the_category();
?>
<div class="col-md-4 col-sm-6 wow fadeInUp">
  <a href="<?php the_permalink(); ?>">
    <div <?php post_class('news-list-item '. $class); ?>>
      <?php the_post_thumbnail('blog-thumb'); ?>
      <div class="caption">
        <p class="date"><?php the_time(get_option( 'date_format' )); ?></p>
        <div class="titles">
          <h4 class="title"><?php the_title(); ?></h4>
          <?php if (!empty($category[0]->cat_name)): ?>
            <span class="cat"><?php echo $category[0]->cat_name; ?></span>
          <?php endif ?>
          <div class="divider"></div>
        </div>
      </div>
    </div>
  </a>
</div>
