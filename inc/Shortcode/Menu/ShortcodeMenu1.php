<?php
    namespace MyPlugin\Shortcode\Menu;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeMenu1 extends AbstractShortcode
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
            return 'awe_res_menu_1';
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
            include $this->parent->locateTemplate('menu/shortcode-menu-1.tpl.php');
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
                    'type'       => 'attach_image',
                    'param_name' => 'awe_menu_1_img',
                    'heading'    => esc_html__('Ảnh', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_menu_1_sub_title',
                    'heading'    => esc_html__('Sub Title', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_menu_1_title',
                    'heading'    => esc_html__('Title', 'bookawesome'),
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'Danh sách thực đơn', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'name',
                            'heading'    => esc_html__('Tên món', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'old_price',
                            'heading'    => esc_html__('Giá tiền cũ', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'price',
                            'heading'    => esc_html__('Giá tiền', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textarea',
                            'param_name' => 'desc',
                            'heading'    => esc_html__('Mô tả ngắn', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'size',
                            'heading'    => esc_html__('Size', 'bookawesome')
                        ),
                    )
                )
            );

            return array(
                'name'        => esc_html__('Menu', 'bookawesome'),
                'description' => esc_html__('Trang Thực Đơn', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
