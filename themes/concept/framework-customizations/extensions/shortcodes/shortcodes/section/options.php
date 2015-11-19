<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(
  'title' => array(
    'label' => __('Section Title', 'concept'),
    'type'  => 'text',
    'attr' => array('required' => 'required'),
  ),
  'type' => array(
    'label'        => false,
    'desc'         => false,
    'type'         => 'multi-picker',
    'picker'       => array(
      'section_type' => array(
        'type'         => 'select',
        'Label'        => __('Section Type', 'concept'),
        'choices'      => array(
          'default'     => 'Default Section',
          'home'        => 'Home Section',
          'parallax'    => 'Parallax Section',
          'map'         => 'Map Section'
        )
      )
    ),
    'choices' => array(
      'default' => array(
        'show_title' => array(
          'type' => 'switch',
          'label' => __('Show Page Title?', 'concept'),
          'value' => 'yes',
          'left-choice' => array(
            'value' => 'yes',
            'label' => __('Yes', 'concept'),
          ),
          'right-choice' => array(
            'value' => 'no',
            'label' => __('No', 'concept'),
          ),
        ),
        'subtitle' => array(
          'type' => 'text',
          'label' => __('Section Subtitle', 'concept')
        ),
        'disable_padding' => array(
          'type' => 'select',
          'label' => __('Disable Padding?', 'concept'),
          'choices' => array(
            'no' => __('No', 'concept'),
            'yes' => __('Yes', 'concept'),
            'top' => __('Only Top', 'concept'),
            'bottom' => __('Only Bottom', 'concept')
          )
        ),
        'animation' => array(
          'type' => 'switch',
          'value' => 'on',
          'label' => __('Animation', 'concept'),
          'left-choice' => array(
            'value' => 'on',
            'label' => __('On', 'concept'),
          ),
          'right-choice' => array(
            'value' => '',
            'label' => __('Off', 'concept'),
          ),
        )
      ),
      'parallax' => array(
        'parallax_bg' => array(
          'label' => __('Background Image', 'concept'),
          'type'  => 'background-image',
        ),
        'parallax_overlay' => array(
          'label' => __('Overlay Color', 'concept'),
          'type'  => 'select',
          'choices' => array(
            'dark' => 'Dark',
            'light' => 'Light'
          )
        )
      )
    ),
    'show_borders' => true,
  ),
);
