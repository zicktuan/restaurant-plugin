<?php
namespace MyPlugin\Shortcode;

class ShortcodeAbout extends AbstractShortcode
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
        return 'awe_res_about';
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
        include $this->parent->locateTemplate('shortcode-about.tpl.php');
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
                'param_name' => 'awe_about_bg',
                'heading'    => esc_html__('Background', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_about_sub_title',
                'heading'    => esc_html__('Sub title', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_about_title',
                'heading'    => esc_html__('Title', 'bookawesome')
            ),
            array(
                'type'       => 'textarea',
                'param_name' => 'awe_about_desc',
                'heading'    => esc_html__('Description', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_about_btn_name',
                'heading'    => esc_html__('Button name', 'bookawesome'),
                'std'        => 'Xem Tiếp'
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_about_btn_url',
                'heading'    => esc_html__('Url', 'bookawesome'),
                'std'        => '#'
            ),
        );

        return array(
            'name'        => esc_html__('Giới Thiệu', 'bookawesome'),
            'description' => esc_html__('Giới Thiệu', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
