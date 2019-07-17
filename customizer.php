<?php
add_action('customize_register', 'banner_call_to_action');
function banner_call_to_action($wp_customize){
    $section = 'banner_call_to_action';
    $wp_customize->add_section('banner_call_to_action', array(
      'title'          => 'Banner call to action'
    ));

    $wp_customize->add_setting('banner_title');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_title',array(
     'label'      => 'Bannerin otsikko',
     'section'    => $section,
     'settings'   => 'banner_title',
     'type'       => 'textarea'
     ))); 

     $wp_customize->add_setting('banner_description');
     $wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_description',array(
      'label'      => 'Bannerin kuvaus',
      'section'    => $section,
      'settings'   => 'banner_description',
      'type'       => 'textarea'
      ))); 

  
    $wp_customize->add_setting('banner_link_text');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'banner_link_text',array(
    'label'      => 'Linkin teksti',
    'section'    => $section,
    'settings'   => 'banner_link_text',
    'type'       => 'text'
    ))); 

     $wp_customize->add_setting( 'banner_calltoaction_link', []);
     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_calltoaction_link', [
       'label' => __( 'Link href', 'cart' ),
       'section' => $section,
       'settings' => 'banner_calltoaction_link',
       'type' => 'dropdown-pages'
     ]));
   }

?>