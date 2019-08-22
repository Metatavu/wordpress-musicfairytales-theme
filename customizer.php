<?php
add_action('customize_register', function ($wp_customize) {

  $wp_customize->add_section('banner_call_to_action', array(
    'title' => 'Banner call to action'
  ));

  $wp_customize->add_section('frontpage_contents', array(
    'title' => 'Etusivun sisällöt'
  ));

  $wp_customize->add_setting('banner_title');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_title',array(
    'label'      => 'Bannerin otsikko',
    'section'    => 'banner_call_to_action',
    'settings'   => 'banner_title',
    'type'       => 'textarea'
  ))); 

  $wp_customize->add_setting('banner_description');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_description',array(
    'label'      => 'Bannerin kuvaus',
    'section'    => 'banner_call_to_action',
    'settings'   => 'banner_description',
    'type'       => 'textarea'
  ))); 


  $wp_customize->add_setting('banner_link_text');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_link_text',array(
    'label'      => 'Linkin teksti',
    'section'    => 'banner_call_to_action',
    'settings'   => 'banner_link_text',
    'type'       => 'text'
  ))); 

  $wp_customize->add_setting( 'banner_calltoaction_link', []);
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_calltoaction_link', [
    'label' => __( 'Link href', 'cart' ),
    'section' => 'banner_call_to_action',
    'settings' => 'banner_calltoaction_link',
    'type' => 'dropdown-pages'
  ]));

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