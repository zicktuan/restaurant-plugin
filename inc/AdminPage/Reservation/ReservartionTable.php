<?php
    namespace MyPlugin\AdminPage\Reservation;

    if ( ! class_exists( 'WP_List_Table' ) )
    {
        require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
    }

    class ReservartionTable extends \WP_List_Table {

        public function __construct()
        {
            parent::__construct();
        }

        function column_cb($item)
        {
            return sprintf(
                '<input type="checkbox" name="id[]" value="%s" class="awe-admin-check-bk" />',
                $item->id
            );
        }

        function get_columns()
        {
            $columns = [
                'cb'     => '<input type="checkbox" />',
            ];
            return $columns;
        }

        function display_tablenav( $which = ''){}

        function process_bulk_action(){}

        function no_items()
        {
            _e( 'No itinerary found.', 'bookawesome' );
        }

        /**
         * Handles data query and filter, sorting, and pagination.
         */
        public function prepare_items() {

            $this->_column_headers = $this->get_column_info();

            /** Process bulk action */
            $this->process_bulk_action();
        }

    }
