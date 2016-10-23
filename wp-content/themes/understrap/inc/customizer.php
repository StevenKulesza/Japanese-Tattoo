<?php
/**
 * understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function understrap_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'understrap_customize_register' );

function understrap_theme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'understrap_theme_slider_options', array(
        'title'          => __( 'Slider Settings', 'understrap' )
    ) );

    $wp_customize->add_setting( 'understrap_theme_slider_count_setting', array(
        'default'        => '1',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'understrap_theme_slider_count', array(
        'label'      => __( 'Number of slides displaying at once', 'understrap' ),
        'section'    => 'understrap_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'understrap_theme_slider_count_setting'
    ) );

    $wp_customize->add_setting( 'understrap_theme_slider_time_setting', array(
        'default'        => '5000',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'understrap_theme_slider_time', array(
        'label'      => __( 'Slider Time (in ms)', 'understrap' ),
        'section'    => 'understrap_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'understrap_theme_slider_time_setting'
    ) );

    $wp_customize->add_setting( 'understrap_theme_slider_loop_setting', array(
        'default'        => 'true',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'understrap_theme_loop', array(
        'label'      => __( 'Loop Slider Content', 'understrap' ),
        'section'    => 'understrap_theme_slider_options',
        'type'     => 'radio',
        'choices'  => array(
            'true'  => 'yes',
            'false' => 'no',
        ),
        'settings'   => 'understrap_theme_slider_loop_setting'
    ) );




/*
*
*
*
1. Global Settings
    I.      Site Identity
    II.     Logo
    III.    Contact Info
    IV.     Mobile Options
    V.      Google Fonts (x)
    VI.     Colors
    VII.    Link Style (x)
    VIII.   Other Elements
    IX.     Background Image
    
2. Header
    I.      Anchor Post
    II.     Menus (x)
    
3. Home Page
    I.      Feature Header
    II.     Logo Bar
    III.    3 Feature Boxes
    IV.     Front Page Display
    
4. Footer
    I.      About
    II.     Google Map
    III.    Disclaimer
    
5. Social
    I.      Social URLs
    II.     Review Us Links
    
6. Widgets
    I.      Side Bar
    II.     First Footer Widget
    III.    Second Footer Widget
    
7. Advanced Options
    I.      Website Performance (x)
            A.  Minify CSS (x)
            
Post Message CSS (colors) (x)
$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
*
*
*
*/

/*  
*
*
* 
*
* 1. Global Settings
*
*
*
*
*/
$wp_customize->add_panel( 'panel_1', array(
    'title' => '1. Global Settings',
    'description' => 'This panel contains header sections.',
    'priority' => 1,
) );
/***************************************** I. Site Identity *****************************************/
$wp_customize->add_section( 'title_tagline' , array(
    'title'       => __( 'Site Identity', 'themeslug' ),
    'priority'    => 10,
    'description' => 'Change the sites title and tagline.',
    'panel' => 'panel_1',
) );
/***************************************** II. Site Menu Bar *****************************************/
$wp_customize->add_section( 'themeslug_menu_section' , array(
    'title'       => __( 'Menu Bar', 'themeslug' ),
    'priority'    => 20,
    'description' => 'four menu items',
    'panel' => 'panel_1',
) );
$wp_customize->add_setting( 
    'themeslug_menu_item_1',
    array (
        'default' => 'Page Title',
        ) );
$wp_customize->add_control( 'themeslug_menu_item_1', array(
    'label'    => __( 'Menu Item 1 Title', 'themeslug' ),
    'section'  => 'themeslug_menu_section',
    'type' => 'text',
    'priority'    => 1
) );
$wp_customize->add_setting( 
    'themeslug_menu_item_1_link',
    array (
        'default' => 'url link goes here',
        ) );
$wp_customize->add_control( 'themeslug_menu_item_1_link', array(
    'label'    => __( 'Menu Item 1 Link', 'themeslug' ),
    'section'  => 'themeslug_menu_section',
    'type' => 'text',
    'priority'    => 2
) );
$wp_customize->add_setting( 
    'themeslug_menu_item_2',
    array (
        'default' => 'Page Title',
        ) );
$wp_customize->add_control( 'themeslug_menu_item_2', array(
    'label'    => __( 'Menu Item 2 Title', 'themeslug' ),
    'section'  => 'themeslug_menu_section',
    'type' => 'text',
    'priority'    => 3
) );
$wp_customize->add_setting( 
    'themeslug_menu_item_2_link',
    array (
        'default' => 'url link goes here',
        ) );
$wp_customize->add_control( 'themeslug_menu_item_2_link', array(
    'label'    => __( 'Menu Item 2 Link', 'themeslug' ),
    'section'  => 'themeslug_menu_section',
    'type' => 'text',
    'priority'    => 4
) );
$wp_customize->add_setting( 
    'themeslug_menu_item_3',
    array (
        'default' => 'Page Title',
        ) );
$wp_customize->add_control( 'themeslug_menu_item_3', array(
    'label'    => __( 'Menu Item 3 Title', 'themeslug' ),
    'section'  => 'themeslug_menu_section',
    'type' => 'text',
    'priority'    => 5
) );
$wp_customize->add_setting( 
    'themeslug_menu_item_3_link',
    array (
        'default' => 'url link goes here',
        ) );
$wp_customize->add_control( 'themeslug_menu_item_3_link', array(
    'label'    => __( 'Menu Item 3 Link', 'themeslug' ),
    'section'  => 'themeslug_menu_section',
    'type' => 'text',
    'priority'    => 6
) );

$wp_customize->add_setting( 
    'themeslug_menu_item_4',
    array (
        'default' => 'Page Title',
        ) );
$wp_customize->add_control( 'themeslug_menu_item_4', array(
    'label'    => __( 'Menu Item 4 Title', 'themeslug' ),
    'section'  => 'themeslug_menu_section',
    'type' => 'text',
    'priority'    => 7
) );
$wp_customize->add_setting( 
    'themeslug_menu_item_4_link',
    array (
        'default' => 'url link goes here',
        ) );
$wp_customize->add_control( 'themeslug_menu_item_4_link', array(
    'label'    => __( 'Menu Item 4 Link', 'themeslug' ),
    'section'  => 'themeslug_menu_section',
    'type' => 'text',
    'priority'    => 8
) );

/***************************************** III. Contact Info *****************************************/
$wp_customize->add_section( 'themeslug_contact_section' , array(
    'title'       => __( 'Contact Page & Footer', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Phone, address, email',
    'panel' => 'panel_1',
) );
$wp_customize->add_setting( 
    'themeslug_phone',
    array (
        'default' => '123-456-7890',
        ) );
$wp_customize->add_control( 'themeslug_phone', array(
    'label'    => __( 'Phone', 'themeslug' ),
    'section'  => 'themeslug_contact_section',
    'type' => 'text',
    'priority'    => 1
) );
$wp_customize->add_setting( 
    'themeslug_address',
    array (
        'default' => '123 Fake St, Atlanta, GA 30022',
        ) );
$wp_customize->add_control( 'themeslug_address', array(
    'label'    => __( 'Address', 'themeslug' ),
    'section'  => 'themeslug_contact_section',
    'type' => 'text',
    'priority'    => 2
) );
$wp_customize->add_setting( 'themeslug_email',
    array (
        'default' => 'example@email.com',
         ) );
$wp_customize->add_control( 'themeslug_email', array(
    'label'    => __( 'Email Link', 'themeslug' ),
    'section'  => 'themeslug_contact_section',
    'type' => 'text',
    'priority'    => 2
) );
$wp_customize->add_setting( 'themeslug_google_map',
    array (
        'default' => '#',
         ) );
$wp_customize->add_control( 'themeslug_google_map', array(
    'label'    => __( 'Google Map Link', 'themeslug' ),
    'section'  => 'themeslug_contact_section',
    'type' => 'text',
    'priority'    => 3
) );
$wp_customize->add_setting( 'themeslug_google_map_embedded' );
$wp_customize->add_control( 'themeslug_google_map_embedded', array(
    'label'    => __( 'Hide Google Map on Contact Page', 'themeslug' ),
    'section'  => 'themeslug_contact_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 3
) );


/***************************************** II. Menus *****************************************/
/*
$wp_customize->add_section( 'nav' , array(
    'title'       => __( 'Menus', 'themeslug' ),
    'priority'    => 20,
    'panel' => 'panel_2',
) );
*/

/***************************************** III. Header Image *****************************************/
$wp_customize->add_section( 'header_slider' , array(
    'title'       => __( 'Header Slider', 'themeslug' ),
    'priority'    => 30,
    'panel' => 'panel_2',
) );

/*  
*
*
* 
*
* 2. Home Page
*
*
*
*
*/
$wp_customize->add_panel( 'panel_3', array(
    'title' => '2. Home Page',
    'description' => 'This panel contains header sections.',
    'priority' => 3,
) );

/***************************************** I. Feature Header *****************************************/

$wp_customize->add_section( 'themeslug_fheader_section' , array(
    'title'       => __( 'Homepage Image Slider', 'themeslug' ),
    'priority'    => 10,
    'description' => ' The Homepage Image Slider - Add up to 5 slides. I recommend that ALL image sizes to be exactly 1400x700.',
    'panel' => 'panel_3',
) );

$wp_customize->add_setting( 'themeslug_slide1_title',
    array (
        'default' => 'This is the first slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide1_title', array(
    'label'    => __( 'Slide 1 Title', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 7
) );
$wp_customize->add_setting( 'themeslug_slide1_descr',
    array (
        'default' => 'This is the description for the first slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide1_descr', array(
    'label'    => __( 'Slide 1 description', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 8
) );
$wp_customize->add_setting( 'themeslug_slide1_link',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_slide1_link', array(
    'label'    => __( 'Slide 1 link', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 10
) );
$wp_customize->add_setting( 'themeslug_slide1_pic' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_slide1_pic', array(
    'label'    => __( 'Slide 1 Image', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'settings' => 'themeslug_slide1_pic',
    'priority'    => 11
) ) );
$wp_customize->add_setting( 'themeslug_hide_slide1' );
$wp_customize->add_control( 'themeslug_hide_slide1', array(
    'label'    => __( 'Hide Slide 1', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 12
) );
$wp_customize->add_setting( 'themeslug_slide2_title',
    array (
        'default' => 'This is the second slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide2_title', array(
    'label'    => __( 'Slide 2 Title', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 13
) );
$wp_customize->add_setting( 'themeslug_slide2_descr',
    array (
        'default' => 'This is the description for the second slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide2_descr', array(
    'label'    => __( 'Slide 2 description', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 14
) );
$wp_customize->add_setting( 'themeslug_slide2_link',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_slide2_link', array(
    'label'    => __( 'Slide 2 link', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 16
) );
$wp_customize->add_setting( 'themeslug_slide2_pic' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_slide2_pic', array(
    'label'    => __( 'Slide 2 Image', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'settings' => 'themeslug_slide2_pic',
    'priority'    => 17
) ) );
$wp_customize->add_setting( 'themeslug_hide_slide2' );
$wp_customize->add_control( 'themeslug_hide_slide2', array(
    'label'    => __( 'Hide Slide 2', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 18
) );
$wp_customize->add_setting( 'themeslug_slide3_title',
    array (
        'default' => 'This is the third slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide3_title', array(
    'label'    => __( 'Slide 3 Title', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 19
) );
$wp_customize->add_setting( 'themeslug_slide3_descr',
    array (
        'default' => 'This is the description for the third slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide3_descr', array(
    'label'    => __( 'Slide 3 description', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 20
) );
$wp_customize->add_setting( 'themeslug_slide3_link',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_slide3_link', array(
    'label'    => __( 'Slide 3 link', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 22
) );
$wp_customize->add_setting( 'themeslug_slide3_pic' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_slide3_pic', array(
    'label'    => __( 'Slide 3 Image', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'settings' => 'themeslug_slide3_pic',
    'priority'    => 23
) ) );
$wp_customize->add_setting( 'themeslug_hide_slide3' );
$wp_customize->add_control( 'themeslug_hide_slide3', array(
    'label'    => __( 'Hide Slide 3', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 24
) );
$wp_customize->add_setting( 'themeslug_slide4_title',
    array (
        'default' => 'This is the fourth slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide4_title', array(
    'label'    => __( 'Slide 4 Title', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 25
) );
$wp_customize->add_setting( 'themeslug_slide4_descr',
    array (
        'default' => 'This is the description for the fourth slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide4_descr', array(
    'label'    => __( 'Slide 4 description', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 26
) );
$wp_customize->add_setting( 'themeslug_slide4_link',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_slide4_link', array(
    'label'    => __( 'Slide 4 link', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 28
) );
$wp_customize->add_setting( 'themeslug_slide4_pic' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_slide4_pic', array(
    'label'    => __( 'Slide 4 Image', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'settings' => 'themeslug_slide4_pic',
    'priority'    => 29
) ) );
$wp_customize->add_setting( 'themeslug_hide_slide4' );
$wp_customize->add_control( 'themeslug_hide_slide4', array(
    'label'    => __( 'Hide Slide 4', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 30
) );
$wp_customize->add_setting( 'themeslug_slide5_title',
    array (
        'default' => 'This is the fifth slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide5_title', array(
    'label'    => __( 'Slide 5 Title', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 31
) );
$wp_customize->add_setting( 'themeslug_slide5_descr',
    array (
        'default' => 'This is the description for the fifth slide.', 
        ) );
$wp_customize->add_control( 'themeslug_slide5_descr', array(
    'label'    => __( 'Slide 5 description', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 32
) );
$wp_customize->add_setting( 'themeslug_slide5_link',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_slide5_link', array(
    'label'    => __( 'Slide 5 link', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'text',
    'priority'    => 34
) );
$wp_customize->add_setting( 'themeslug_slide5_pic' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_slide5_pic', array(
    'label'    => __( 'Slide 5 Image', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'settings' => 'themeslug_slide5_pic',
    'priority'    => 35
) ) );
$wp_customize->add_setting( 'themeslug_hide_slide5' );
$wp_customize->add_control( 'themeslug_hide_slide5', array(
    'label'    => __( 'Hide Slide 5', 'themeslug' ),
    'section'  => 'themeslug_fheader_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 36
) );
/***************************************** IV. Static Front Page *****************************************/
$wp_customize->add_section( 'static_front_page' , array(
   'panel' => 'panel_3',
   'title'       => __( 'Static Front Page', 'themeslug' ),
   'priority'    => 40,
) );

/*  
*
*
* 
*
* 4. Footer
*
*
*
*
*/
$wp_customize->add_panel( 'panel_4', array(
    'title' => '4. Footer',
    'description' => 'This panel contains header sections.',
    'priority' => 4,
) );
/* I. About Text */
$wp_customize->add_section( 'themeslug_footer-about_section' , array(
    'title'       => __( 'About', 'themeslug' ),
    'priority'    => 33,
    'description' => 'About text in footer.',
   'panel' => 'panel_4',
) );

class HBC_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    }
}
$wp_customize->add_setting( 'themeslug_about-text',
    array (
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat lorem tortor, eget interdum quam. Ut sit amet urna nunc, sed gravida nisi. Vivamus in elit eget nisl egestas egestas et nec lectus.', 
        ) );
$wp_customize->add_control( new HBC_Customize_Textarea_Control( $wp_customize, 'themeslug_footer-about_section', array(
    'label'   => 'Content',
    'section' => 'themeslug_footer-about_section',
    'settings'   => 'themeslug_about-text',
) ) );

/*  
*
*
* 
*
* 5. Social
*
*
*
*
*/
$wp_customize->add_panel( 'panel_5', array(
    'title' => '5. Social',
    'description' => 'This panel contains header sections.',
    'priority' => 5,
) );
/***************************************** I. Social Buttons *****************************************/

$wp_customize->add_section( 'themeslug_social_section' , array(
    'title'       => __( 'Social URLs', 'themeslug' ),
    'priority'    => 10,
    'description' => 'Social button URLs',
    'panel' => 'panel_5',
) );
$wp_customize->add_setting( 'themeslug_facebook',
    array (
        'default' => '#', 
        ) );
$wp_customize->add_control( 'themeslug_facebook', array(
    'label'    => __( 'Facebook URL', 'themeslug' ),
    'section'  => 'themeslug_social_section',
    'type' => 'text',
    'priority'    => 1,
 ) );
$wp_customize->add_setting( 'themeslug_facebook-off',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_facebook-off', array(
    'label'    => __( 'Hide Facebok', 'themeslug' ),
    'section'  => 'themeslug_social_section',
    'type' => 'checkbox',
    'priority'    => 2,
) );
 
/*** Google Plus (Theme Customizer) ***/
$wp_customize->add_setting( 'themeslug_gplus',
    array (
        'default' => '#', 
        ) );
$wp_customize->add_control( 'themeslug_gplus', array(
    'label'    => __( 'Google+ URL', 'themeslug' ),
    'section'  => 'themeslug_social_section',
    'type' => 'text',
    'priority'    => 3,
 ) );
$wp_customize->add_setting( 'themeslug_gplus-off',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_gplus-off', array(
    'label'    => __( 'Hide Google+', 'themeslug' ),
    'section'  => 'themeslug_social_section',
    'type' => 'checkbox',
    'priority'    => 4,
) );

/*** Twitter (Theme Customizer) ***/
$wp_customize->add_setting( 'themeslug_twitter',
    array (
        'default' => '#', 
        ) );
$wp_customize->add_control( 'themeslug_twitter', array(
    'label'    => __( 'Twitter URL', 'themeslug' ),
    'section'  => 'themeslug_social_section',
    'type' => 'text',
    'priority'    => 5,
 ) );
$wp_customize->add_setting( 'themeslug_twitter-off',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_twitter-off', array(
    'label'    => __( 'Hide Twitter', 'themeslug' ),
    'section'  => 'themeslug_social_section',
    'type' => 'checkbox',
    'priority'    => 6,
) );
 
/*** Instagram (Theme Customizer) ***/
$wp_customize->add_setting( 'themeslug_instagram',
    array (
        'default' => '#',
         ) );
$wp_customize->add_control( 'themeslug_instagram', array(
    'label'    => __( 'Instagram URL', 'themeslug' ),
    'section'  => 'themeslug_social_section',
    'type' => 'text',
    'priority'    => 7,
) );
$wp_customize->add_setting( 'themeslug_instagram-off',
    array (
        'default' => '#', 
) );
$wp_customize->add_control( 'themeslug_instagram-off', array(
    'label'    => __( 'Hide Instagram', 'themeslug' ),
    'section'  => 'themeslug_social_section',
    'type' => 'checkbox',
    'priority'    => 8,
) );

/***************************************** II. Review Us *****************************************/

$wp_customize->add_section( 'themeslug_reviews_section' , array(
    'title'       => __( 'Review Us links', 'themeslug' ),
    'priority'    => 20,
    'description' => 'Links to review sites the client is listed on. Users will see these when they use the Rate Us function and select 4 stars or higher.',
    'panel' => 'panel_5',
) );
$wp_customize->add_setting( 'themeslug_gplus_rev',
    array (
        'default' => '#', 
        ) );
$wp_customize->add_control( 'themeslug_gplus_rev', array(
    'label'    => __( 'Google+ Review URL', 'themeslug' ),
    'section'  => 'themeslug_reviews_section',
    'type' => 'text',
    'priority'    => 1,
 ) );
$wp_customize->add_setting( 'themeslug_gplus_rev_off' );
$wp_customize->add_control( 'themeslug_gplus_rev_off', array(
    'label'    => __( 'Hide Google+', 'themeslug' ),
    'section'  => 'themeslug_reviews_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 2,
) );
$wp_customize->add_setting( 'themeslug_fb_rev',
    array (
        'default' => '#', 
        ) );
$wp_customize->add_control( 'themeslug_fb_rev', array(
    'label'    => __( 'Facebook Review URL', 'themeslug' ),
    'section'  => 'themeslug_reviews_section',
    'type' => 'text',
    'priority'    => 3,
 ) );
$wp_customize->add_setting( 'themeslug_fb_rev_off' );
$wp_customize->add_control( 'themeslug_fb_rev_off', array(
    'label'    => __( 'Hide Facebook', 'themeslug' ),
    'section'  => 'themeslug_reviews_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 4,
) );
$wp_customize->add_setting( 'themeslug_yelp_rev',
    array (
        'default' => '#', 
        ) );
$wp_customize->add_control( 'themeslug_yelp_rev', array(
    'label'    => __( 'Yelp Review URL', 'themeslug' ),
    'section'  => 'themeslug_reviews_section',
    'type' => 'text',
    'priority'    => 5,
 ) );
$wp_customize->add_setting( 'themeslug_yelp_rev_off' );
$wp_customize->add_control( 'themeslug_yelp_rev_off', array(
    'label'    => __( 'Hide Yelp', 'themeslug' ),
    'section'  => 'themeslug_reviews_section',
    'type' => 'select',
    'default' => 'No',
    'choices' => array(
        'value1' => 'Yes',
        'value2' => 'No',
        ),
    'priority'    => 6,
) );

/*  
*
*
* 
*
* 6. Widgets
*
*
*
*
*/
$wp_customize->add_panel( 'widgets', array(
    'title' => '6. Widgets',
    'description' => 'This panel contains footer and sidebar widgets.',
    'priority' => 6,
) );
/*  
*
*
* 
*
* 7. Advanced Options
*
*
*
*
*/$wp_customize->add_panel( 'panel_7', array(
    'title' => '7. Advanced Options',
    'description' => 'This panel contains advanced options.',
    'priority' => 7,
) );

$wp_customize->add_section( 'themeslug_test_section_6' , array(
   'title'       => __( 'Test', 'themeslug' ),
   'priority'    => 10,
   'panel' => 'panel_7',
   'description' => 'Phone, address, hours',
) );
$wp_customize->add_setting( 
    'themeslug_test_6',
    array (
        'default' => 'test area',
        ) );
$wp_customize->add_control( 'themeslug_test_6', array(
   'label'    => __( 'Test Label', 'themeslug' ),
   'section'  => 'themeslug_test_section_6',
   'type' => 'text',
   'priority'    => 1
) );



/******** Example *********/
/*
$wp_customize->add_panel( 'some_panel', array(
    'title' => 'Panel 1',
    'description' => 'This is a description of this panel',
    'priority' => 10,
) );
$wp_customize->add_section( 'themeslug_test_section' , array(
   'title'       => __( 'Test', 'themeslug' ),
   'priority'    => 24,
   'panel' => 'some_panel',
   'description' => 'Phone, address, hours',
) );
$wp_customize->add_setting( 
    'themeslug_test',
    array (
        'default' => 'test area',
        ) );
$wp_customize->add_control( 'themeslug_test', array(
   'label'    => __( 'Test Label', 'themeslug' ),
   'section'  => 'themeslug_test_section',
   'type' => 'text',
   'priority'    => 1
) );
*/


}
add_action( 'customize_register', 'understrap_theme_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function understrap_customize_preview_js() {
	wp_enqueue_script( 'understrap_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );
