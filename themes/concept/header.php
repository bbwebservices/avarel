<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <?php $favicon = cp_options('favicon'); ?>
  <link rel="shortcut icon" href="<?php echo esc_url($favicon['url']); ?>">
  <?php if ( ! function_exists( '_wp_render_title_tag' ) ) : ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php endif; ?>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if (cp_options('hide_preloader')): ?>
  <!-- Preloader -->
  <div id="preloader">
      <div id="spinner"></div>
  </div>
  <!-- End Preloader-->
  <?php endif ?>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php $logo = cp_options('logo'); ?>
          <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($logo['url']); ?>" alt=""></a>
        </div>
        <!-- Social Icons -->
        <div class="header-social hidden-sm hidden-xs">
          <ul class="social-icons list-inline">
            <?php if (cp_options('facebook') && in_array('facebook', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('facebook')); ?>"><i class="ion-social-facebook"></i></a></li>
            <?php endif ?>
            <?php if (cp_options('twitter') && in_array('twitter', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('twitter')); ?>"><i class="ion-social-twitter"></i></a></li>
            <?php endif ?>
            <?php if (cp_options('google_plus') && in_array('google_plus', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('google_plus')); ?>"><i class="ion-social-googleplus"></i></a></li>
            <?php endif ?>
            <?php if (cp_options('instagram') && in_array('instagram', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('instagram')); ?>"><i class="ion-social-instagram"></i></a></li>
            <?php endif ?>
            <?php if (cp_options('linkedin') && in_array('linkedin', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('linkedin')); ?>"><i class="ion-social-linkedin"></i></a></li>
            <?php endif ?>
            <?php if (cp_options('youtube') && in_array('youtube', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('youtube')); ?>"><i class="ion-social-youtube"></i></a></li>
            <?php endif ?>
            <?php if (cp_options('pinterest') && in_array('pinterest', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('pinterest')); ?>"><i class="ion-social-pinterest"></i></a></li>
            <?php endif ?>
            <?php if (cp_options('dribbble') && in_array('dribbble', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('dribbble')); ?>"><i class="ion-social-dribbble"></i></a></li>
            <?php endif ?>
            <?php if (cp_options('tumblr') && in_array('tumblr', cp_options('top-menu-icons'))): ?>
            <li><a href="<?php echo esc_url(cp_options('tumblr')); ?>"><i class="ion-social-tumblr"></i></a></li>
            <?php endif ?>
          </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
          <?php if (has_nav_menu('primary')): ?>
            <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_id' => 'main-menu',
              'menu_class' => 'nav navbar-nav',
            )); ?>
          <?php elseif(current_user_can('manage_options')): ?>
            <a class="no-menu" href="<?php echo esc_url(home_url('/wp-admin/nav-menus.php')) ?>"><?php _e('Click here to add your menu', 'concept'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </nav>
  </header>
