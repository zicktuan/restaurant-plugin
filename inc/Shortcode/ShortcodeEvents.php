<?php
    namespace MyPlugin\Shortcode;

    class ShortcodeEvents extends AbstractShortcode
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
            return 'awe_res_events';
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
            include $this->parent->locateTemplate('shortcode-events.tpl.php');
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

            $listCat = [];
            $listCatSystem = get_categories();
            foreach ($listCatSystem as $value) {
                $listCat[$value->name] = $value->term_id;
            }


            $params = array(
                array(
                    "type" => "textfield",
                    "heading" => __( "Sub title", "bookawesome" ),
                    "param_name" => "awe_event_sub_title",
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Title", "bookawesome" ),
                    "param_name" => "awe_event_title",
                ),
                array(
                    "type"       => "dropdown",
                    "param_name" => "awe_list_event",
                    "heading"    => esc_html__("Danh mục", "bookawesome"),
                    "value"      => $listCat
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'number_post',
                    'heading'    => esc_html__('Số bài hiển thị', 'bookawesome'),
                    'std'        => '3'
                ),

            );

            return array(
                'name'        => esc_html__('Ưu Đãi', 'bookawesome'),
                'description' => esc_html__('Ưu Đãi Ngoài Trang Chủ', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
