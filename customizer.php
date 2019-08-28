<?php
add_action('customize_register', function ($wp_customize) {

  $wp_customize->add_section('banner_call_to_action', array(
    'title' => 'Etusivun banneri'
  ));

  $wp_customize->add_section('frontpage_contents', array(
    'title' => 'Etusivun sisällöt'
  ));

  for ($i = 1; $i <= 5; $i++) {
    $settingKey = "frontpage_carousel_page_$i";
    $wp_customize->add_setting($settingKey , []);
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, $settingKey, [
      'label' => "Karusellisivu $i",
      'section' => 'banner_call_to_action',
      'settings' => $settingKey,
      'type' => 'dropdown-pages'
    ]));
  }

  $wp_customize->add_setting( 'frontpage_short_description_page', []);
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'frontpage_short_description_page', [
    'label' => "Sivu etusivun lyhyelle kuvaukselle",
    'section' => 'frontpage_contents',
    'settings' => 'frontpage_short_description_page',
    'type' => 'dropdown-pages'
  ]));

  $wp_customize->add_setting( 'frontline_page_1', []);
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'frontline_page_1', [
    'label' => "Sivu etusivun nostosivu 1",
    'section' => 'frontpage_contents',
    'settings' => 'frontline_page_1',
    'type' => 'dropdown-pages'
  ]));

  $wp_customize->add_setting( 'frontline_page_2', []);
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'frontline_page_2', [
    'label' => "Sivu etusivun nostosivu 2",
    'section' => 'frontpage_contents',
    'settings' => 'frontline_page_2',
    'type' => 'dropdown-pages'
  ]));

  $wp_customize->add_setting( 'some_page', []);
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'some_page', [
    'label' => "Some sivu",
    'section' => 'frontpage_contents',
    'settings' => 'some_page',
    'type' => 'dropdown-pages'
  ]));
});