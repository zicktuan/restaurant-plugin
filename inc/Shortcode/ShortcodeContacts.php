<?php
namespace MyPlugin\Shortcode;

class ShortcodeContacts extends AbstractShortcode
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
        return 'awe_res_contact';
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
        include $this->parent->locateTemplate('shortcode-contact.tpl.php');
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
                'param_name' => 'awe_contact_bg',
                'heading'    => esc_html__('Background', 'bookawesome')
            ),
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
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_contact_email',
                'heading'    => esc_html__('Email', 'bookawesome'),
                'std'        => 'Email',
                'desc'       => 'Text ô input khi đang trống'
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_contact_name',
                'heading'    => esc_html__('Name', 'bookawesome'),
                'std'        => 'Tên khách hàng',
                'desc'       => 'Text ô input khi đang trống'
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_contact_content',
                'heading'    => esc_html__('Content', 'bookawesome'),
                'std'        => 'Ý kiến khách hàng',
                'desc'       => 'Text ô input khi đang trống'
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_contact_btn_name',
                'heading'    => esc_html__('Button name', 'bookawesome'),
                'std'        => 'Gửi tin nhắn của bạn',
                'desc'       => 'Text ô input khi đang trống'
            ),
        );

        return array(
            'name'        => esc_html__('Liên hệ', 'bookawesome'),
            'description' => esc_html__('Liên hệ Ngoài Trang Chủ', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
