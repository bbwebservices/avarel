<?php
/*
Template Name: One Page
*/

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section id="page-<?php the_id(); ?>">
      <?php the_content(); ?>
    </section>

  <?php endwhile; ?>

  <?php endif; ?>

<?php get_footer();?>
