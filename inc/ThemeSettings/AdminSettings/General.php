<?php 

namespace MyPlugin\ThemeSettings\AdminSettings;

use MyPlugin\ThemeSettings\SettingFactory;

/**
 * @author lookawesome team
 * @version 1.0
 * @package AdminSettings
 * 
 * Setting General theme setting for theme bookawesome
*/

class General extends SettingFactory
{

	public function section(){
		return array(
	        'id'          => 'general_setting',
			'title' => __(' General Settings', 'bookawesome'),
            'icon'  => '<div class="dashicons dashicons-admin-generic"></div>'
	    );
	}

	public function settings(){
	    $this->general();
	    $this->listMail();
		$this->header();
		$this->footer();
		return $this->fieldsSettings;
	}

	public function general() {
        $settings = [
            [
                'label'       => __( 'General', 'bookawesome' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'          => 'awe_phone_online',
                'label'       => __( 'Số điện thoại online', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_fb',
                'label'       => __( 'Đường dẫn trang facebook', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '#',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_ins',
                'label'       => __( 'Đường dẫn instagram', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '#',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_you',
                'label'       => __( 'Đường dẫn youtube', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '#',
                'desc'        => ' '
            ],

        ];
        $this->setListSettings($settings);
    }

    public function listMail() {
        $settings = [
            [
                'label'       => __( 'List Mail', 'bookawesome' ),
                'id'          => 'list_mail',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'          => 'awe_email_to',
                'label'       => __( 'Email to (*)', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_email_cc_to',
                'label'       => __( 'CC to', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_email_bcc_to',
                'label'       => __( 'BCC to', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],

        ];
        $this->setListSettings($settings);
    }

	public function header() {
        $settings = [
            [
                'label'       => __( 'Header', 'bookawesome' ),
                'id'          => 'header',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_header_logo',
                'label'   => __( 'Logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_address',
                'label'   => __( 'Địa chỉ', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_phone',
                'label'   => __( 'Số điện thoại', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_time',
                'label'   => __( 'Thời gian làm việc', 'bookawesome' ),
                'type'    => 'text',
                'std'     => '10:00 am - 11:00 pm',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_desc',
                'label'   => __( 'Mô tả ngắn banner', 'bookawesome' ),
                'type'    => 'textarea-simple',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_btn_menu',
                'label'   => __( 'Button menu', 'bookawesome' ),
                'type'    => 'text',
                'std'     => 'Thực đơn',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_link_menu',
                'label'   => __( 'Link menu', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_btn_reservation',
                'label'   => __( 'Button reservation', 'bookawesome' ),
                'type'    => 'text',
                'std'     => 'Đặt bàn',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_link_reservation',
                'label'   => __( 'Link reservation', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
        ];
        $this->setListSettings($settings);
    }

    public function footer() {
        $settings = [
            [
                'label'       => __( 'Footer', 'bookawesome' ),
                'id'          => 'footer',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_copyright',
                'label'   => __('Footer copyright', 'bookawesome'),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
        ];
        $this->setListSettings($settings);
    }
}