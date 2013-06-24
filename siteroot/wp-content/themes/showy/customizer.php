<?php
 
add_filter( 'customize_register', 'theme_customizer_register' );

function theme_customizer_register($wp_customize) {

	class Example_Customize_Textarea_Control extends WP_Customize_Control {
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
	//Section Style Options

	$wp_customize->add_section( 'theme_customizer_basic', array(
		'title' => __( 'Logo image', 'section' ),
		'priority' => 100
	) );
	
	$wp_customize->add_section( 'theme_customizer_intros', array(
		'title' => __( 'Home Page settings', 'section' ),
		'priority' => 101
	) );
	
	//Logo Image
	$wp_customize->add_setting( 'theme_customizer_logo', array(
		
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_logo', array(
		'label' => __( 'Logo Upload', 'section' ),
		'section' => 'theme_customizer_basic',
		'settings' => 'theme_customizer_logo'
	) ) );

	//Favicon Image
	$wp_customize->add_section( 'theme_customizer_favicon', array(
		'title' => __( 'Favicon image', 'section' ),
		'priority' => 120
	) );
	
	$wp_customize->add_setting( 'theme_customizer_favicon', array(
		
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_favicon', array(
		'label' => __( 'Favicon Upload', 'section' ),
		'section' => 'theme_customizer_favicon',
		'settings' => 'theme_customizer_favicon'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_introhometext', array(
		
	) );

	$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'theme_customizer_introhometext', array(
		'label' => __( 'Home Intro Text', 'section' ),
		'type'    => 'textarea',
		'section' => 'theme_customizer_intros',
		'settings' => 'theme_customizer_introhometext'
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_linktoportfolio', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_linktoportfolio', array(
		'label' => __( 'Link to Portfolio (for the heart icon)', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_intros',
		'settings' => 'theme_customizer_linktoportfolio'
	) ) );
	
	//Footer social buttons
	$wp_customize->add_section( 'theme_customizer_footersocial', array(
		'title' => __( 'Footer social buttons', 'section' ),
		'priority' => 105
	) );

	$wp_customize->add_setting( 'theme_customizer_footerfacebook', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerfacebook', array(
		'label' => __( 'Facebook link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerfacebook'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footeryoutube', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footeryoutube', array(
		'label' => __( 'Google link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footeryoutube'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertwitter', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertwitter', array(
		'label' => __( 'Twitter link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footertwitter'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertumblr', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertumblr', array(
		'label' => __( 'Tumblr link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footertumblr'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footervimeo', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footervimeo', array(
		'label' => __( 'Vimeo link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footervimeo'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerflickr', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerflickr', array(
		'label' => __( 'Flickr link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerflickr'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerlinkedin', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerlinkedin', array(
		'label' => __( 'Linkedin link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerlinkedin'
	) ) );
		
	$wp_customize->add_setting( 'theme_customizer_twitter', array(
		
	) );

	$wp_customize->add_setting( 'theme_customizer_facebook', array(
		
	) );

	$wp_customize->add_setting( 'theme_customizer_linkedin', array(
		
	) );

	$wp_customize->add_setting( 'theme_customizer_googleplus', array(
		
	) );
	
	$wp_customize->add_setting( 'theme_customizer_pinterest', array(
		
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_twitter', array(
		'label' => __( 'Twitter', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_twitter'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_facebook', array(
		'label' => __( 'Facebook', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_facebook'
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_pinterest', array(
		'label' => __( 'Pinterest', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_pinterest'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_linkedin', array(
		'label' => __( 'Linkedin', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_linkedin'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_googleplus', array(
		'label' => __( 'Google Plus', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_googleplus'
	) ) );

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'accent_color', 'default' => '#73d2b9', 'label' => __( 'Accent Color', 'section' ), 'priority' => 2 );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	//Real Time Settings Preview
	
	$wp_customize->get_setting('blogname')->transport='postMessage';
	
	if ( $wp_customize->is_preview() && ! is_admin() )
	add_filter( 'wp_footer', 'customizer_preview', 21);
	
	function customizer_preview() {
		?>
		<script type="text/javascript">
		( function( $ ){
		
		wp.customize('blogname',function( value ) {
			value.bind(function(to) {
				$('#logo h1 a, #logo h2 a').html(to);
			});
		});
		
		} )( jQuery )
		</script>
		<?php 
	}
	
}