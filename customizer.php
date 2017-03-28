<?php
	function casaItalia_customize_register($wp_customize) {             		
	// Section Header
		$wp_customize->add_section('casaItalia_section', array(
			'title'       => 'Headeranpassungen',
			'priority'    => 4,
			'description' => 'Weitere Anpassungen Header und Navigation',
		));
		
		
		// Settings Schriftfarbe
		$wp_customize->add_setting('casaItalia_color', array(
			'default'           => 'white',
			'sanitize_callback' => 'sanitize_text_field', 
			'type'              => 'option',
		));	
		
		// Control Schriftfarbe
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
				$wp_customize, 
				'casaItalia_color_control', 
				array(
					'label'    => 'Schriftfarbe wählen',
					'section'  => 'casaItalia_section',
					'settings' => 'casaItalia_color',
				)
			) 
		);
		

		// Settings Opacity
		$wp_customize->add_setting('casaItalia_opacity', array(
			'default'        => '0.5',
			'sanitize_callback' => 'sanitize_text_field', 
			'type'           => 'option',
		));
		
		
		// Control Opacity
		$wp_customize->add_control('casaItalia_color_scheme', array(
			'label'      => __('Transparenz', 'themename'),
			'default'    => '0.5',
			'section'    => 'casaItalia_section',
			'settings'   => 'casaItalia_opacity',
			'type'       => 'radio',
			'choices'    => array(
				'0.3' => 'leicht',
				'0.5' => 'mittel',
				'0.7' => 'stark',
			),
		));

		

		
		
	// Section Footer
		$wp_customize->add_section('casaItalia_section2', array(
			'title'       => 'Footeranpassungen',
			'priority'    => 6,
			'description' => 'Schrift- und Hintergrundfarbe Footer',
		));
		
		
		// Settings Schriftfarbe Footer
		$wp_customize->add_setting('casaItalia_color_footer', array(
			'default'           => 'white',
			'sanitize_callback' => 'sanitize_text_field', 
			'type'              => 'option',
		));	
		
		
		// Settings Hintergrundfarbe Footer
		$wp_customize->add_setting('casaItalia_background_footer', array(
			'default'           => 'white',
			'sanitize_callback' => 'sanitize_text_field', 
			'type'              => 'option',
		));	
		
		
		// Control Schriftfarbe Footer
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
				$wp_customize, 
				'casaItalia_background_control', 
				array(
					'label'    => 'Schriftfarbe wählen',
					'section'  => 'casaItalia_section2',
					'settings' => 'casaItalia_color_footer',
				)
			) 
		);
		
		
		// Control Hintergrundfarbe Footer
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
				$wp_customize, 
				'casaItalia_color_control', 
				array(
					'label'    => 'Hintergrundfarbe wählen',
					'section'  => 'casaItalia_section2',
					'settings' => 'casaItalia_background_footer',
				)
			) 
		);	

		
	}  

	add_action('customize_register','casaItalia_customize_register');
	
	
	
	
	
	
	
	
	
	
	
	