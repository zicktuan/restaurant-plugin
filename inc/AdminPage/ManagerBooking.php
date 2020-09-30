<?php
    namespace MyPlugin\AdminPage;

    use MyPlugin\AdminPage\Reservation\ReservartionTable;

    /**
     * @author lookawesome team
     * @version 1.0
     * @package AdminPage
     *
     * Init module page manager booking
     */
    class ManagerBooking
    {
        public $pageReservation = 'manager-reservation';

        public function __construct()
        {
            add_menu_page('Quản lý đặt bàn', 'Quản lý đặt bàn', 'manage_options', $this->pageReservation, array($this, 'pageReservation'), 'dashicons-book-alt', 5);
        }

        public function pageReservation(){
            global $wp_query;
            echo '<h1 class="wp-heading-inline">Quản lý đặt bàn</h1>';
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'meta_key' => 'awe_reservation'
            );
            $dbResult = new \WP_Query($args);
            echo "<pre>";
            print_r($dbResult);
            echo "</pre>";
//            global $post;
//            if ($dbResult->have_posts()){
//                $dbResult->the_post();
//                $value = get_post_meta($post->ID,'picture_upload_1',true);
//            }
            $table = new ReservartionTable;
//            require_once BOOKAWESOME_PLUGIN_DIR . 'inc/AdminPage/Request/Contact/layout/contact-data.php';
        }

    }
