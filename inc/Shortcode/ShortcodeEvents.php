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
            $args = array(
                'posts_per_page' => -1,
                'post_type'      => 'awe_events_pt',
            );
        $listPost = get_posts( $args );
        $argsPost = [];
        foreach ($listPost as $value) {
            $tmp          = [];
            $tmp['label'] = $value->post_title;
            $tmp['value'] = $value->ID;
            $argsPost[]   = $tmp;
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
                    'type'       => 'autocomplete',
                    'param_name' => 'awe_list_event',
                    'heading'    => esc_html__('Ưu đãi', 'bookawesome'),
                    'settings'   => array(
                        'multiple'       => true,
                        'sortable'       => true,
                        'min_length'     => 1,
                        'no_hide'        => true,
                        'unique_values'  => true,
                        'display_inline' => true,
                        'values'         => $argsPost
                    ),
                    'save_always' => true,
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
