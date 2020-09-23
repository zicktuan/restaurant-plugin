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
                    'type'       => 'textfield',
                    'param_name' => 'awe_contact_form_sub_title',
                    'heading'    => esc_html__('Sub title', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_contact_form_title',
                    'heading'    => esc_html__('Title', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_contact_email',
                    'heading'    => esc_html__('Email', 'bookawesome'),
                    'std'        => 'Email',
                    'desc'       => 'Text ô input khi đang trống'
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_contact_form_name',
                    'heading'    => esc_html__('Name', 'bookawesome'),
                    'std'        => 'Tên khách hàng',
                    'desc'       => 'Text ô input khi đang trống'
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_contact_form_content',
                    'heading'    => esc_html__('Content', 'bookawesome'),
                    'std'        => 'Ý kiến khách hàng',
                    'desc'       => 'Text ô input khi đang trống'
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_contact_form_btn_name',
                    'heading'    => esc_html__('Button name', 'bookawesome'),
                    'std'        => 'Gửi tin nhắn của bạn',
                    'desc'       => 'Text ô input khi đang trống'
                ),
            );

            return array(
                'name'        => esc_html__('Menu 1', 'bookawesome'),
                'description' => esc_html__('Trang Thực Đơn', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
