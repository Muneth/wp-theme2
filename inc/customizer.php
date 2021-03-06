<?php
	function fc_customize_register($wp_customize){
		// Showcase Section
  		$wp_customize->add_section('details', array(
			'title'          => __('Details', 'project-site'),
			'description'    => sprintf( __('Options for the theme', 'project-site')
			),
			'priority'       => 130,
		));

		// Email Setting
		  $wp_customize->add_setting('email', array(
		    'default'              => _x('something@something.com', 'project-site'),
		    'type'                 => 'theme_mod'
		  ));

		  // Email Control
		  $wp_customize->add_control( 'email', array(
		    'label'    => __('Email', 'project-site'),
		    'section'  => 'details',
		    'priority' => 1,
		  ));

		  // Phone Setting
		  $wp_customize->add_setting('phone', array(
		    'default'              => _x('1 800 555-5555', 'project-site'),
		    'type'                 => 'theme_mod'
		  ));

		  // Phone Control
		  $wp_customize->add_control( 'phone', array(
		    'label'    => __('Phone Number', 'project-site'),
		    'section'  => 'details',
		    'priority' => 2,
		  ));

		  // Facebook URL Setting
			 $wp_customize->add_setting('facebook_url', array(
			   'default'              => _x('http://www.facebook.com', 'project-site'),
			   'type'                 => 'theme_mod'
			 ));

			 // Facebook URL Control
			 $wp_customize->add_control( 'facebook_url', array(
			   'label'    => __('Facebook URL', 'project-site'),
			   'section'  => 'details',
			   'priority' => 3,
			 ));

			 // Twitter URL Setting
			 $wp_customize->add_setting('twitter_url', array(
			   'default'              => _x('http://www.twitter.com', 'project-site'),
			   'type'                 => 'theme_mod'
			 ));

			 // Twitter URL Control
			 $wp_customize->add_control( 'twitter_url', array(
			   'label'    => __('Twitter URL', 'project-site'),
			   'section'  => 'details',
			   'priority' =>4,
			 ));

			 // Linkedin URL Setting
			 $wp_customize->add_setting('linkedin_url', array(
			   'default'              => _x('http://www.linkedin.com', 'project-site'),
			   'type'                 => 'theme_mod'
			 ));

			 // Linkedin URL Control
			 $wp_customize->add_control( 'linkedin_url', array(
			   'label'    => __('LinkedIn URL', 'project-site'),
			   'section'  => 'details',
			   'priority' =>3,
			 ));

			 // G+ URL Setting
			 $wp_customize->add_setting('googleplus_url', array(
			   'default'              => _x('http://www.googleplus.com', 'project-site'),
			   'type'                 => 'theme_mod'
			 ));

			 // G+ URL Control
			 $wp_customize->add_control( 'googleplus_url', array(
			   'label'    => __('Google+ URL', 'project-site'),
			   'section'  => 'details',
			   'priority' =>4,
			 ));

			 // Youtube URL Setting
			 $wp_customize->add_setting('youtube_url', array(
			   'default'              => _x('http://www.youtube.com', 'project-site'),
			   'type'                 => 'theme_mod'
			 ));

			 // Youtube URL Control
			 $wp_customize->add_control( 'youtube_url', array(
			   'label'    => __('YouTube URL', 'project-site'),
			   'section'  => 'details',
			   'priority' =>5,
			 ));
	}

	add_action('customize_register', 'fc_customize_register');