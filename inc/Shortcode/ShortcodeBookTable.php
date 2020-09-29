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
                'type'       => 'textarea',
                'param_name' => 'awe_reservation_desc',
                'heading'    => esc_html__('Mô tả ngắn', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_reservation_number_adult',
                'heading'    => esc_html__('Số người lớn', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_reservation_number_child',
                'heading'    => esc_html__('Số trẻ em', 'bookawesome')
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'Danh sách cơ sở', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'name',
                        'heading'    => esc_html__('Địa chỉ', 'bookawesome')
                    ),
                )
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items_time',
                'heading'    => esc_html__( 'Thời gian làm việc', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'       => 'dropdown',
                        'param_name' => 'time',
                        'heading'    => esc_html__('Thời gian làm việc', 'bookawesome'),
                        'value'      => array(
                            'Sáng'  => '0',
                            'Tối'   => '1',
                        )
                    ),
                    array(
                        'type'       => 'param_group',
                        'param_name' => 'items_times',
                        'heading'    => esc_html__( 'Khung Thời gian', 'bookawesome' ),
                        'params'     => array(
                            array(
                                'type'       => 'textfield',
                                'param_name' => 'specific_time',
                                'heading'    => esc_html__('Thời gian', 'bookawesome')
                            ),
                        )
                    ),
                )
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
