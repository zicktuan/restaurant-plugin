<?php
    namespace MyPlugin\Shortcode\About;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeAboutFrist extends AbstractShortcode
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
            return 'awe_res_about_right';
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
            include $this->parent->locateTemplate('about/shortcode-about-right.tpl.php');
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
                    'param_name' => 'awe_about_right_bg',
                    'heading'    => esc_html__('Background', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_about_right_sub_title',
                    'heading'    => esc_html__('Sub title', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'awe_about_right_title',
                    'heading'    => esc_html__('Title', 'bookawesome')
                ),
                array(
                    'type'       => 'textarea',
                    'param_name' => 'awe_about_right_desc',
                    'heading'    => esc_html__('Description', 'bookawesome')
                ),
            );

            return array(
                'name'        => esc_html__('Giới Thiệu 1', 'bookawesome'),
                'description' => esc_html__('Trang Giới Thiệu', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
