<?php

    namespace MyPlugin\PostType;

    class EventsPostType extends AbstractPostType {

        protected $posType = 'awe_events_pt';

        public function __construct() {
            parent::__construct();
        }

        /**
         * Handle add metabox for post type.
         * @return void
         */
        public function metaBox() {
//        add_action('add_meta_boxes', array(new TourMetaBox($this), 'register'));
//        add_action('add_meta_boxes', array(new TourGalleryMetaBox($this), 'register'));
        }

        public function labels() {
            return array(
                'name'                   => _x('Ưu đãi', 'Events General Name', 'bookawesome'),
                'singular_name'          => _x('Awe Events', 'Awe Events Singular Name', 'bookawesome'),
                'menu_name'              => __('Quản lý ưu đãi', 'bookawesome'),
                'name_admin_bar'         => __('Awe Events', 'bookawesome'),
                'archives'               => __('Awe Events Archives', 'bookawesome'),
                'attributes'             => __('Awe Events Attributes', 'bookawesome'),
                'parent_item_colon'      => __('Parent Awe Events:', 'bookawesome'),
                'all_items'              => __('Tất cả ưu đãi', 'bookawesome'),
                'add_new_item'           => __('Thêm mới ưu đãi', 'bookawesome'),
                'add_new'                => __('Thêm mới ưu đãi', 'bookawesome'),
                'new_item'               => __('New Awe Events', 'bookawesome'),
                'edit_item'              => __('Chỉnh sửa ưu đãi', 'bookawesome'),
                'update_item'            => __('Update Awe Events', 'bookawesome'),
                'search_items'           => __('Search Awe Events', 'bookawesome'),
                'not_found'              => __('Not found', 'bookawesome'),
                'not_found_in_trash'     => __('Not found in Trash', 'bookawesome'),
                'featured_image'         => __('Featured Image', 'bookawesome'),
                'set_featured_image'     => __('Set featured image', 'bookawesome'),
                'remove_featured_image'  => __('Remove featured image', 'bookawesome'),
                'use_featured_image'     => __('Use as featured image', 'bookawesome'),
                'insert_into_item'       => __('Insert into events', 'bookawesome'),
                'uploaded_to_this_item'  => __('Uploaded to this awe events', 'bookawesome'),
                'items_list'             => __('Awe Events list', 'bookawesome'),
                'items_list_navigation'  => __('Awe Events list navigation', 'bookawesome'),
                'filter_items_list'      => __('Filter awe events list', 'bookawesome'),
            );
        }

        public function argsRegister() {

            return array(
                'label'                  => __('Awe Events', 'bookawesome'),
                'description'            => __('Awe Events Description', 'bookawesome'),
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

    }
