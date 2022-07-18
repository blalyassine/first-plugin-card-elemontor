<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_Team_Widget extends \Elementor\Widget_Base { 
    
    //  name widget
    public function get_name() {
        return 'team';
    }
    // title widget in elemontor
    public function get_title() {
        return esc_html__( 'team', 'team-elementor-widget' );
    }
    //icon  of widget  //list icon https://elementor.github.io/elementor-icons/
    public function get_icon() {
        return 'eicon-testimonial';
    }
    public function get_custom_help_url() {
        return 'https://developers.elementor.com/docs';
    }

    //category of widget
    public function get_categories() {
        return [ 'general' ];
    }
    //rechech  of widget
    public function get_keywords() {
        return [ 'team', 'testimonial', 'highlight' ];
    }

    protected function register_controls() { 
        // our control function code goes here.

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Information Profile', 'team-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'profile_name',
			[
				'label' => esc_html__( 'Name', 'team-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' =>('Yassine Dotma'),
				'label_block' => true,
				'placeholder' => esc_html__( 'Your Name here', 'team-elementor-widget' ),
			]
		);

		$this->add_control(
			'profile_title',
			[
				'label' => esc_html__( 'Title', 'team-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' =>('Developer web'),
				'label_block' => true,
				'placeholder' => esc_html__( 'Your job here', 'team-elementor-widget' ),
			]
		);

		$this->add_control(
			'profile_description',
			[
				'label' => esc_html__( 'Description', 'team-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block'   => true,
                'default' =>('Lorem ipsum dolor sit amet, consectetur adipisci ng elit.'),
				'placeholder' => esc_html__( 'Your  description here', 'team-elementor-widget' ),
            ],
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'image_section',
			[
				'label' => esc_html__( 'Image Profile', 'team-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'profile_image',
			[
				'label' => esc_html__( 'Choose Image', 'team-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);	
		$this->end_controls_section();

        //style
        $this->start_controls_section(
        'section_style_name', [
        'label' => esc_html__('Name style', 'team-elementor-widget'),
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
    );

    $this->add_responsive_control(
     'name_text_align', [
        'label' => esc_html__('Alignment', 'team-elementor-widget'),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' =>esc_html__('Left', 'team-elementor-widget'),
                'icon' => 'fa fa-align-left',
            ],
            'center' => [
                'title' =>esc_html__('Center', 'team-elementor-widget'),
                'icon' => 'fa fa-align-center',
            ],
            'right' => [
                'title' =>esc_html__('Right', 'team-elementor-widget'),
                'icon' => 'fa fa-align-right',
            ],
            'justify' => [
                'title' =>esc_html__('Justified', 'team-elementor-widget'),
                'icon' => 'fa fa-align-justify',
            ],
        ],
        'selectors' => [
            '{{WRAPPER}} h2 ' => 'text-align: {{VALUE}};',
        ],
            ]
    );

    $this->add_control(
     'name_color', [
        'label' =>esc_html__('Text Color', 'team-elementor-widget'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            ' {{WRAPPER}} h2' => 'color: {{VALUE}};',
        ],
            ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'name_typography',
            'selector' => '{{WRAPPER}} h2',
        ]
    );
    $this->end_controls_section();


        $this->start_controls_section(
            'section_style_title',
            [
                'label' => esc_html__( 'Title Style', 'team-elementor-widget' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
        'title_text_align', [
               'label' => esc_html__('Alignment', 'team-elementor-widget'),
               'type' => \Elementor\Controls_Manager::CHOOSE,
               'options' => [
                   'left' => [
                       'title' =>esc_html__('Left', 'team-elementor-widget'),
                       'icon' => 'fa fa-align-left',
                   ],
                   'center' => [
                       'title' =>esc_html__('Center', 'team-elementor-widget'),
                       'icon' => 'fa fa-align-center',
                   ],
                   'right' => [
                       'title' =>esc_html__('Right', 'team-elementor-widget'),
                       'icon' => 'fa fa-align-right',
                   ],
                   'justify' => [
                       'title' =>esc_html__('Justified', 'team-elementor-widget'),
                       'icon' => 'fa fa-align-justify',
                   ],
               ],
               'selectors' => [
                   '{{WRAPPER}} h3 ' => 'text-align: {{VALUE}};',
               ],
                   ]
           );
       
        //name title
        $this->add_control(
            'title_options',
            [
                'label' => esc_html__( 'Title Options', 'team-elementor-widget' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        //color
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Color', 'team-elementor-widget' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0f0',
                'selectors' => [
                    '{{WRAPPER}} h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} h3',
            ]
        );
    
        $this->end_controls_section();	
        //description
        $this->start_controls_section(
            'section_style_descriptionn',
            [
                'label' => esc_html__( 'Decription Style', 'team-elementor-widget' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
        'decription_text_align', [
               'label' => esc_html__('Alignment', 'team-elementor-widget'),
               'type' => \Elementor\Controls_Manager::CHOOSE,
               'options' => [
                   'left' => [
                       'title' =>esc_html__('Left', 'team-elementor-widget'),
                       'icon' => 'fa fa-align-left',
                   ],
                   'center' => [
                       'title' =>esc_html__('Center', 'team-elementor-widget'),
                       'icon' => 'fa fa-align-center',
                   ],
                   'right' => [
                       'title' =>esc_html__('Right', 'team-elementor-widget'),
                       'icon' => 'fa fa-align-right',
                   ],
                   'justify' => [
                       'title' =>esc_html__('Justified', 'team-elementor-widget'),
                       'icon' => 'fa fa-align-justify',
                   ],
               ],
               'selectors' => [
                   '{{WRAPPER}} p ' => 'text-align: {{VALUE}};',
               ],
                   ]
           );
       
        //name title
        $this->add_control(
            'description_options',
            [
                'label' => esc_html__( 'Title Options', 'team-elementor-widget' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'description_color',
            [
                'label' => esc_html__( 'Color', 'team-elementor-widget' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#f00',
                'selectors' => [
                    '{{WRAPPER}} p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} p',
            ]
        );
    
        $this->end_controls_section();	
    
        $this->start_controls_section(
            'image_styles',
            [
                'label' => esc_html__( 'Image Styles', 'team-elementor-widget' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'image_rounded',
            [
                'label'        => esc_html__( 'Rounded Avatar?', 'team-elementor-widget' ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'image-rounded',
                'default'      => '',
            ]
        );

        $this->add_responsive_control(
            'image_width',
            [
                'label'      => esc_html__( 'Image Width', 'team-elementor-widget' ),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'size_units' => [ 'px', '%' ],
                'selectors'  => [
                    '{{WRAPPER}} img' => 'width:{{SIZE}}{{UNIT}};',
                ]
            ]
        );

        $this->add_responsive_control(
            'image_height',
            [
                'label'      => esc_html__( 'Height', 'team-elementor-widget' ),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                ],
                'size_units' => [ 'px', '%' ],
                'selectors'  => [
                    '{{WRAPPER}} img' => 'height:{{SIZE}}{{UNIT}};',
                ]
            ]
        );

        $this->add_responsive_control(
            'image_margin',
            [
                'label'      => esc_html__( 'Margin', 'team-elementor-widget' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors'  => [
                    '{{WRAPPER}} img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_padding',
            [
                'label'      => esc_html__( 'Padding', 'team-elementor-widget' ),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors'  => [
                    '{{WRAPPER}} img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control( 'border_heading', [
            'type'      => \Elementor\Controls_Manager::HEADING,
            'label'     => esc_html__( 'Border', 'team-elementor-widget' ),
            'separator' => 'before',
        ] );

        $this->add_control(
            'image_border_radius',
            [
                'label'     => esc_html__( 'Border Radius', 'team-elementor-widget' ),
                'type'      => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} img' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
                'condition' => [
                    'image_rounded!' => 'team-avatar-rounded',
                ],
            ]
        );

        $this->end_controls_section();
    

    }

    protected function render() {

        // get our input from the widget settings.
        $settings = $this->get_settings_for_display();
	
	// get the individual values of the input
    
    //**informtion profile */
	$profile_name = $settings['profile_name'];
	$profile_title = $settings['profile_title'];
	$profile_description = $settings['profile_description'];
    //**image profile */
    $profile_image=$settings['profile_image']['url'];
    //**socail profile */
    
	?>

        <!-- Start rendering the output -->
        <div class="card">
            <img src="<?php echo  $profile_image; ?>" class="img img-responsive" sizes="(max-width: 700px) 100vw, 700px" width="700" height="700">
            <h2 class="card_title"><?php echo $profile_title;  ?></h2>
            <h3 class="card_title"><?php echo $profile_name;  ?></h3>
            <p class= "card__description"><?php echo $profile_description;  ?></p>              
      
        </div>
        <!-- End rendering the output -->

        <?php

}

}