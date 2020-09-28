<?php

namespace MyPlugin\PostType;

class BookTablePostType extends AbstractPostType {

    protected $posType = 'awe_reservation_pt';

    public function __construct() {
        parent::__construct();
    }

    /**
     * Handle add metabox for post type.
     * @return void
     */
    public function metaBox() {
        add_filter( 'manage_awe_res_posts_columns', array( $this, 'set_custom_edit_res_columns' ) );
        add_action( 'manage_awe_res_posts_custom_column' , array( $this, 'custom_res_column') , 10, 2 );
    }

    public function labels() {
        return array(
            'name'                   => _x('Đặt Bàn', 'Đặt Bàn General Name', 'bookawesome'),
            'singular_name'          => _x('Awe Reservation', 'Awe Reservation Singular Name', 'bookawesome'),
            'menu_name'              => __('Quản lý đặt bàn', 'bookawesome'),
            'name_admin_bar'         => __('Awe Reservation', 'bookawesome'),
            'archives'               => __('Awe Reservation Archives', 'bookawesome'),
            'attributes'             => __('Awe Reservation Attributes', 'bookawesome'),
            'parent_item_colon'      => __('Parent Awe Reservation:', 'bookawesome'),
            'all_items'              => __('Danh sách đặt bàn', 'bookawesome'),
            'add_new_item'           => __('Thêm mới', 'bookawesome'),
            'add_new'                => __('Thêm mới', 'bookawesome'),
            'new_item'               => __('New Awe Events', 'bookawesome'),
            'edit_item'              => __('Chỉnh sửa ưu đãi', 'bookawesome'),
            'update_item'            => __('Update Awe Reservation', 'bookawesome'),
            'search_items'           => __('Search', 'bookawesome'),
            'not_found'              => __('Not found', 'bookawesome'),
            'not_found_in_trash'     => __('Not found in Trash', 'bookawesome'),
            'featured_image'         => __('Featured Image', 'bookawesome'),
            'set_featured_image'     => __('Set featured image', 'bookawesome'),
            'remove_featured_image'  => __('Remove featured image', 'bookawesome'),
            'use_featured_image'     => __('Use as featured image', 'bookawesome'),
            'insert_into_item'       => __('Insert into reservation', 'bookawesome'),
            'uploaded_to_this_item'  => __('Uploaded to this awe reservation', 'bookawesome'),
            'items_list'             => __('Awe Reservation list', 'bookawesome'),
            'items_list_navigation'  => __('Awe Reservation list navigation', 'bookawesome'),
            'filter_items_list'      => __('Filter awe reservation list', 'bookawesome'),
        );
    }

    public function argsRegister() {

        return array(
            'label'                  => __('Awe Reservation', 'bookawesome'),
            'description'            => __('Awe Reservation Description', 'bookawesome'),
            'rewrite'                => array('slug' => "events"),
            'labels'                 => $this->labels(),
            'supports'               => [ 'title', 'editor', 'thumbnail' ],
            'hierarchical'           => false,
            'public'                 => true,
            'show_ui'                => true,
            'show_in_admin_bar'      => true,
            'show_in_nav_menus'      => true,
            'can_export'             => true,
            'has_archive'            => true,
            'exclude_from_search'    => false,
            'publicly_queryable'     => true,
            'capability_type'        => 'page',
        );
    }

    public function postTypeName() {
        return $this->posType;
    }

    public function set_custom_edit_res_columns($columns) {
        $columns['tour_order'] = __( 'Order', 'bookawesome' );
        $columns['views']      = __( 'Views', 'bookawesome' );
        return $columns;
    }


    public function custom_res_column( $column) {
        if( 'tour_order' ==  $column) {
            echo '12321312';
        }
        if( 'views' ==  $column) {
            echo 'views';
        }
    }



}
