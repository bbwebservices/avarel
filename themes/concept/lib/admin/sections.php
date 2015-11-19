<?php

/* General */
$this->sections[] = array(
  'icon'      => 'el-icon-wrench',
  'title'     => __( 'General', 'concept' ),
  'fields'    => array(
    array(
      'id'  => 'logo',
      'title' => __( 'Logo', 'concept' ),
      'subtitle'  => __( 'Upload your .png or .jpg logo', 'concept' ),
      'type'  => 'media',
      'default' => array(
        'url' => THEME_URI . '/images/logo.png'
      )
    ),
    array(
      'id'  => 'favicon',
      'title' => __( 'Favicon', 'concept' ),
      'subtitle'  => __( 'Upload your .png or .ico favicon', 'concept' ),
      'type'  => 'media',
      'default' => array(
        'url' => THEME_URI . '/images/favicon.png'
      )
    ),
    array(
      'id'       => 'hide_preloader',
      'type'     => 'switch',
      'title'    => __('Preloader', 'concept'),
      'subtitle' => __('Look, it\'s on!', 'concept'),
      'default'  => true,
    ),
  )
);

/* Styling */
$this->sections[] = array(
  'icon'      => 'el-icon-pencil',
  'title'     => __( 'Styling', 'concept' ),
  'fields'    => array(
    array(
      'id'    => 'primary_color',
      'type'  => 'color',
      'title' => __('Primary Color', 'concept'),
      'subtitle'  => __('Pick the primary color for the theme', 'concept'),
      'transparent' => false,
      'default' => '#9E9B7E'
    ),
    array(
      'id'          => 'primary_font',
      'type'        => 'typography',
      'title'       => __('Primary Font', 'concept'),
      'subtitle'    => __('Select the primary font for the theme', 'concept'),
      'google'      => true,
      'font-backup' => false,
      'color'       => false,
      'text-align'  => false,
      'subsets'     => false,
      'line-height' => false,
      'font-size'   => false,
      'output'      => array('h2.site-description'),
      'units'       =>'px',
      'default'     => array(
        'font-family' => 'Roboto',
        'google'      => true,
      ),
    ),
    array(
      'id'          => 'heading_font',
      'type'        => 'typography',
      'title'       => __('Heading Font', 'concept'),
      'subtitle'    => __('Select the font for the heading tags (H1, H2, H1, H4, H5, H6)', 'concept'),
      'google'      => true,
      'font-backup' => false,
      'color'       => false,
      'text-align'  => false,
      'subsets'     => false,
      'line-height' => false,
      'font-size'   => false,
      'output'      => array('h2.site-description'),
      'units'       =>'px',
      'default'     => array(
        'font-family' => 'Roboto Condensed',
        'google'      => true,
      ),
    ),
    array(
      'id'       => 'custom_css',
      'type'     => 'ace_editor',
      'title'    => __('Custom CSS', 'concept'),
      'subtitle' => __('Paste your CSS code here.', 'concept'),
      'mode'     => 'css',
      'theme'    => 'monokai',
      'default'  => "/* Your code here */ "
    ),
  )
);


/* Social Networks */
$this->sections[] = array(
  'icon'      => 'el-icon-twitter',
  'title'     => __( 'Social Links', 'concept' ),
  'desc'      => '',
  'fields'    => array(
     array(
      'id'       => 'top-menu-icons',
      'type'     => 'select',
      'multi'    => true,
      'title'    => __('Socials on top navbar', 'concept'),
      'subtitle' => __('Select the socials that you want to show in the top navbar', 'concept'),
      'options'  => array(
        'facebook'  => __('Facebook', 'concept'),
        'twitter'   => __('Twitter', 'concept'),
        'google_plus' => __('Google Plus', 'concept'),
        'instagram' => __('Instagram', 'concept'),
        'linkedin' => __('Linkedin', 'concept'),
        'youtube' => __('Youtube', 'concept'),
        'pinterest' => __('Pinterest', 'concept'),
        'dribbble' => __('Dribbble', 'concept'),
        'tumblr' => __('Tumblr', 'concept'),
      ),
      'default'  => array('facebook', 'twitter', 'google_plus')
    ),
    array(
      'id'      =>'facebook',
      'type'    => 'text',
      'title'   => __('Facebook', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'twitter',
      'type'    => 'text',
      'title'   => __('Twitter', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'google_plus',
      'type'    => 'text',
      'title'   => __('Google Plus', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'instagram',
      'type'    => 'text',
      'title'   => __('Instagram', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'linkedin',
      'type'    => 'text',
      'title'   => __('Linkedin', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'youtube',
      'type'    => 'text',
      'title'   => __('Youtube', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'pinterest',
      'type'    => 'text',
      'title'   => __('Pinterest', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'behance',
      'type'    => 'text',
      'title'   => __('Behance', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'dribbble',
      'type'    => 'text',
      'title'   => __('Dribbble', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'tumblr',
      'type'    => 'text',
      'title'   => __('Tumblr', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'flickr',
      'type'    => 'text',
      'title'   => __('Flickr', 'concept'),
      'default' => '',
    ),
    array(
      'id'      =>'500px',
      'type'    => 'text',
      'title'   => __('500px', 'concept'),
      'default' => '',
    ),
  )
);

/* Blog */
$this->sections[] = array(
  'icon'      => 'el-icon-list-alt',
  'title'     => __( 'Blog', 'concept' ),
  'fields'    => array(
    array(
      'id'    => 'blog_title',
      'title' => __('Blog Page Title', 'concept'),
      'type'  => 'text',
      'default' => __('News List', 'concept')
    ),
    array(
      'id'    => 'blog_subtitle',
      'title' => __('Blog Page Subtitle', 'concept'),
      'type'  => 'textarea',
      'default' => __('Sed ac mattis justo. Vestibulum facilisis at arcu ac porta. Vivamus at ipsum at quam hendrerit gravida.', 'concept')
    ),
  )
);

/* Footer */
$this->sections[] = array(
  'icon'      => 'el-icon-website',
  'title'     => __( 'Footer', 'concept' ),
  'fields'    => array(
    array(
      'id'  => 'footer_text',
      'title' => __( 'Copyright Text', 'concept' ),
      'type'  => 'text',
      'default' => '&copy; 2015 '. get_bloginfo('name').'. All rights reserved.'
    ),
    array(
      'id'  => 'footer_bg',
      'title' => __( 'Background Image', 'concept' ),
      'subtitle'  => __( 'Upload your .png or .jpg background', 'concept' ),
      'type'  => 'media',
    ),
  )
);
  ?>
