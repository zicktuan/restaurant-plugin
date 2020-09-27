<?php
namespace MyPlugin\Shortcode;

class ShortcodeBookTable extends AbstractShortcode
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
        return 'awe_res_reservation';
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
        include $this->parent->locateTemplate('shortcode-reservation.tpl.php');
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
                'param_name' => 'awe_contact_sub_title',
                'heading'    => esc_html__('Sub Title', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_contact_title',
                'heading'    => esc_html__('Title', 'bookawesome')
            ),
        );

        return array(
            'name'        => esc_html__('Đặt Bàn', 'bookawesome'),
            'description' => esc_html__('Popup Đặt Bàn', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
