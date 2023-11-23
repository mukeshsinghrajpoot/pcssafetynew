<?php 
function social_media( $wp_customize ){
        //Settings
		$wp_customize->add_setting( 'linkedin', array( 'default' => '' ) );
		$wp_customize->add_setting( 'facebook', array( 'default' => '' ) );
        $wp_customize->add_setting( 'twitter', array( 'default' => '' ) );
        $wp_customize->add_setting( 'instagram', array( 'default' => '' ) );
        $wp_customize->add_setting( 'email', array( 'default' => '' ) );
        $wp_customize->add_setting( 'phone', array( 'default' => '' ) );
        $wp_customize->add_setting( 'address', array( 'default' => '' ) );
        $wp_customize->add_setting( 'address1', array( 'default' => '' ) );
        $wp_customize->add_setting( 'copyright', array( 'default' => '' ) );

        //Sections
        $wp_customize->add_section(
            'social-media',
            array(
                'title' => __( 'Social Media', '_s' ),
                'priority' => 30,
                'description' => __( 'Enter the URL to your accounts for each social media for the icon to appear in the header.', '_s' )
            )
        );

        //Controls
         //LinkedIn
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'linkedin',
                array(
                    'label' => __( 'LinkedIn', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'linkedin'
                )
            )
        );
        //Facebook
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'facebook',
                array(
                    'label' => __( 'Facebook', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'facebook'
                )
            )
        );
        //Twitter
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'twitter',
                array(
                    'label' => __( 'Twitter', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'twitter'
                )
            )
        );
        //Instragram
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'instagram',
                array(
                    'label' => __( 'Instagram', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'instagram'
                )
            )
        );
        //Email
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'email',
                array(
                    'label' => __( 'Email', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'email'
                )
            )
        );
        //Email
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'phone',
                array(
                    'label' => __( 'Phone', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'phone'
                )
            )
        );
        //Address
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'address',
                array(
                    'label' => __( 'Address first', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'address'
                )
            )
        );
        //Address1
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'address1',
                array(
                    'label' => __( 'Address second', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'address1'
                )
            )
        );
        //copyright
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize, 'copyright',
                array(
                    'label' => __( 'Copyright', '_s' ),
                    'section' => 'social-media',
                    'settings' => 'copyright'
                )
            )
        );
        
    }
    add_action('customize_register', 'social_media');