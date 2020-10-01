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
            echo '<h1 class="wp-heading-inline">Quản lý đặt bàn</h1>';
            require_once MYPLUGIN_PLUGIN_DIR . 'inc/AdminPage/Reservation/layout/reservation-table.php';
        }

    }
