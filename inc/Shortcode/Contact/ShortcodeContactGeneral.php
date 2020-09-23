<?php
    namespace MyPlugin\Shortcode\Contact;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeContactGeneral extends AbstractShortcode
    {
        public function __construct($self = null) {
            $this->parent = $self;
            add_shortcode($this->get_name(), array($this, 'render'));
            vc_lean_map($this->get_name(), array($this, 'map'));
        }

        /**
         * Get ShortCode name.
         *
         * @return string
         */
        public function get_name() {
            return 'awe_res_contact_general';
        }

        /**
         * ShortCode handler.
         *
         * @param array $atts ShortCode attributes.
         *
         * @return string ShortCode output.
         */
        public function render($atts) {
            $atts = vc_map_get_attributes($this->get_name(), $atts);
            $atts = array_map('trim', $atts);

            $workingHour = vc_param_group_parse_atts( $atts['items_working_hours'] );
            $contactInfo = vc_param_group_parse_atts( $atts['items_contact_info'] );
            $contactSocial = vc_param_group_parse_atts( $atts['items_contact_social'] );
            $contactEmail = vc_param_group_parse_atts( $atts['items_contact_email'] );

            ob_start();
            include $this->parent->locateTemplate('contact/shortcode-contact-general.tpl.php');
            return ob_get_clean();
        }

        /**
         * Get shortCode settings.
         *
         * @return array
         *
         * @see vc_lean_map()
         */
        public function map() {
            $params = array(
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items_working_hours',
                    'heading'    => esc_html__('Thời gian làm việc', 'bookawesome'),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'time',
                            'heading'    => esc_html__('Thời gian', 'bookawesome')
                        )
                    )
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items_contact_info',
                    'heading'    => esc_html__( 'Thông Tin Liên Hệ', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'bookawesome')
                        ),
                        array(
                            'type'       => 'param_group',
                            'param_name' => 'info',
                            'heading'    => esc_html__( 'Item', 'bookawesome' ),
                            'params'     => array(
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'info_value',
                                    'heading'    => esc_html__('Thông tin', 'bookawesome')
                                ),
                            )
                        ),
                    )
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items_contact_social',
                    'heading'    => esc_html__( 'Mạng Xã Hội', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'        => 'dropdown',
                            'heading'     => __('Socical'),
                            'param_name'  => 'icon',
                            'admin_label' => true,
                            'value'       => array(
                                'Facebook'   => 'fa-facebook',
                                'Instagram'  => 'fa-instagram',
                                'Youtube'    => 'fa-youtube',
                                'Youtube-Play'    => 'fa-youtube-play',
                                'Twitter'    => 'fa-twitter'
                            )
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'url',
                            'heading'    => esc_html__('URL', 'bookawesome'),
                            'std'        => '#'
                        ),
                    )
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items_contact_email',
                    'heading'    => esc_html__( 'List Email', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'email',
                            'heading'    => esc_html__('Email', 'bookawesome')
                        ),
                    )
                ),
            );

            return array(
                'name'        => esc_html__('Liên Hệ Chung', 'bookawesome'),
                'description' => esc_html__('Trang Liên Hệ', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
