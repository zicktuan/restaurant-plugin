<?php
    namespace MyPlugin\Shortcode;

    class ShortcodeFreshlyTaste extends AbstractShortcode
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
            return 'awe_freshly_taste';
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

            $listItems = vc_param_group_parse_atts( $atts['items'] );

            ob_start();
            include $this->parent->locateTemplate('shortcode-freshly-taste.tpl.php');
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
                    'type'       => 'textfield',
                    'param_name' => 'awe_ft_sub_title',
                    'heading'    => esc_html__('Sub Title', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_ft_title',
                    'heading'    => esc_html__('Title', 'bookawesome')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'List Item', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'img',
                            'heading'    => esc_html__('Image', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'price',
                            'heading'    => esc_html__('Price', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'old_price',
                            'heading'    => esc_html__('Old Price', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'dish_name',
                            'heading'    => esc_html__('Dish Name', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'category',
                            'heading'    => esc_html__('Category', 'bookawesome')
                        ),
                    )
                )

            );

            return array(
                'name'        => esc_html__('Thực đơn mới', 'bookawesome'),
                'description' => esc_html__('Thực Đơn Mới Ngoài Trang Chủ', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
