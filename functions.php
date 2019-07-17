<?php

// Load the theme stylesheets
function theme_styles()  

{ 
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), 1, 'all' );
	wp_enqueue_style( 'style');
}

add_action('wp_enqueue_scripts', 'theme_styles');

// Load the theme javascript
function theme_scripts() 

{
	wp_register_script('lastmodified', get_template_directory_uri() . '/js/lastmodified.js', array() , 1, 1, 1);
	wp_enqueue_script ('lastmodified');
	
	wp_register_script('accordion', get_template_directory_uri() . '/js/accordion.js', array() , 1, 1, 1);
	wp_enqueue_script ('accordion');
}

add_action( 'wp_enqueue_scripts', 'theme_scripts', 50, 0 );

function panel($wp_customize){

	$wp_customize->add_panel('panel',array(
		'title'=>'Cards Section',
	));
	
	$wp_customize->add_section('eLeadWorks-cards-section-404',array(
		'title'=>'404 Card',
		'panel'=>'panel',
	));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-display-404');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-display-404', array(
		'label' => 'Turn Card on?',
		'section' => 'eLeadWorks-cards-section-404',
		'settings' => 'eLeadWorks-cards-callout-display-404',
		'type' => 'select',
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	)));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-headline-404');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-headline-404', array(
		'label' => 'Card Label',
		'section' => 'eLeadWorks-cards-section-404',
		'settings' => 'eLeadWorks-cards-callout-headline-404'
	)));
	
	$wp_customize->add_section('eLeadWorks-cards-section-footer',array(
		'title'=>'Footer Card',
		'panel'=>'panel',
	));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-display-footer');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-display-footer', array(
		'label' => 'Turn Card on?',
		'section' => 'eLeadWorks-cards-section-footer',
		'settings' => 'eLeadWorks-cards-callout-display-footer',
		'type' => 'select',
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	)));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-headline-footer');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-headline-footer', array(
		'label' => 'Card Label',
		'section' => 'eLeadWorks-cards-section-footer',
		'settings' => 'eLeadWorks-cards-callout-headline-footer'
	)));
	
	$wp_customize->add_section('eLeadWorks-cards-section-function',array(
		'title'=>'Function Card',
		'panel'=>'panel',
	));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-display-function');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-display-function', array(
		'label' => 'Turn Card on?',
		'section' => 'eLeadWorks-cards-section-function',
		'settings' => 'eLeadWorks-cards-callout-display-function',
		'type' => 'select',
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	)));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-headline-function');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-headline-function', array(
		'label' => 'Card Label',
		'section' => 'eLeadWorks-cards-section-function',
		'settings' => 'eLeadWorks-cards-callout-headline-function'
	)));
	
	$wp_customize->add_section('eLeadWorks-cards-section-header',array(
		'title'=>'Header Card',
		'panel'=>'panel',
	));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-display-header');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-display-header', array(
		'label' => 'Turn Card on?',
		'section' => 'eLeadWorks-cards-section-header',
		'settings' => 'eLeadWorks-cards-callout-display-header',
		'type' => 'select',
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	)));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-headline-header');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-headline-header', array(
		'label' => 'Card Label',
		'section' => 'eLeadWorks-cards-section-header',
		'settings' => 'eLeadWorks-cards-callout-headline-header'
	)));
	
	$wp_customize->add_section('eLeadWorks-cards-section-index',array(
		'title'=>'Index Card',
		'panel'=>'panel',
	));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-display-index');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-display-index', array(
		'label' => 'Turn Card on?',
		'section' => 'eLeadWorks-cards-section-index',
		'settings' => 'eLeadWorks-cards-callout-display-index',
		'type' => 'select',
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	)));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-headline-index');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-headline-index', array(
		'label' => 'Card Label',
		'section' => 'eLeadWorks-cards-section-index',
		'settings' => 'eLeadWorks-cards-callout-headline-index'
	)));
	
	$wp_customize->add_section('eLeadWorks-cards-section-style',array(
		'title'=>'Style Card',
		'panel'=>'panel',
	));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-display-style');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-display-style', array(
		'label' => 'Turn Card on?',
		'section' => 'eLeadWorks-cards-section-style',
		'settings' => 'eLeadWorks-cards-callout-display-style',
		'type' => 'select',
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	)));
	
	$wp_customize->add_setting('eLeadWorks-cards-callout-headline-style');
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'eLeadWorks-cards-callout-headline-style', array(
		'label' => 'Card Label',
		'section' => 'eLeadWorks-cards-section-style',
		'settings' => 'eLeadWorks-cards-callout-headline-style'
	)));

}   

add_action('customize_register','panel');
