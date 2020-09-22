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
        return 'design_construct_contact';
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
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'List Item', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'        => 'dropdown',
                        'heading'     => __('Icon'),
                        'param_name'  => 'awe_contact_item_icon',
                        'admin_label' => true,
                        'value'       => array(
                            'Pencil'     => 'icon-pencil',
                            'Map'        => 'icon-map-pin',
                            'Megaphone'  => 'icon-megaphone',
                            'Tools'      => 'icon-tools',
                        ),
                    ),
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'awe_contact_item_desc',
                        'heading'    => esc_html__('Description', 'bookawesome')
                    ),
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'awe_contact_item_title',
                        'heading'    => esc_html__('Title', 'bookawesome')
                    ),
                )
            )
        );

        return array(
            'name'        => esc_html__('Contacts', 'bookawesome'),
            'description' => esc_html__('Contacts', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
