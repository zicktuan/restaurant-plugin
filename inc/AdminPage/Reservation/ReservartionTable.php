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

        function column_name($item)
        {
            $inforMeta = get_post_meta($item, 'awe_reservation', true);
            return !empty($inforMeta['name']) ? $inforMeta['name'] : '';
        }

        function column_phone($item)
        {
            $inforMeta = get_post_meta($item, 'awe_reservation', true);
            return !empty($inforMeta['phone']) ? $inforMeta['phone'] : '';
        }

        function column_info($item)
        {
            $output   = '';

            $inforMeta = get_post_meta($item, 'awe_reservation', true);

            $output .= 'Email: ' . (!empty($inforMeta['mail']) ? $inforMeta['mail'] : '');
            $output .= '<br/>';
            $output .= 'Thời gian: ' .  (!empty($inforMeta['time']) ? $inforMeta['time'] : '') . ' ' . (!empty($inforMeta['hour']) ? $inforMeta['hour'] : '');
            $output .= '<br/>';
            $output .= 'Người lớn: ' .  (!empty($inforMeta['adult']) ? $inforMeta['adult'] : 0);
            $output .= '<br/>';
            $output .= 'Trẻ em: ' .  (!empty($inforMeta['child']) ? $inforMeta['child'] : 0);
            return $output;
        }

        function column_book_date($item)
        {
            $inforMeta = get_post_meta($item, 'awe_reservation', true);
            return !empty($inforMeta['date']) ? $inforMeta['date'] : '';
        }

        function column_status($item)
        {
            $output = '';
            $inforMeta = get_post_meta($item, 'awe_reservation', true);

            if (0 == $inforMeta['status']) {
                $output .= '<a href="#" class="awe-admin-status">Đang chờ</a>';
            }

            return $output;
        }

        function column_date($item)
        {
            $info = get_post($item);
            $output = '';
            $output .= date("d M, Y", strtotime($info->post_date));
            $output .= '<br/>';
            $output .= date("H:i:s", strtotime($info->post_date));
            return $output;
        }

        function column_action($item)
        {
            $actions = [
                'delete' => sprintf('<span class="spinner"></span><a class="bas-admin-manage-res-delete" data-id="%u" style="cursor: pointer;">%s</a>', $item, __('Delete', 'bookawesome')),
            ];

            return sprintf('%s',
                $this->row_actions($actions, true)
            );
        }

        function get_columns()
        {
            $columns = [
                'cb'     => '<input type="checkbox" />',
                'name'   => __('Tên khách hàng', 'bookawesome'),
                'phone'  => __('Số điện thoại', 'bookawesome'),
                'info'  => __('Thông tin', 'bookawesome'),
                'book_date'   => __('Ngày nhận bàn', 'bookawesome'),
                'status'   => __('Status', 'bookawesome'),
                'date'   => __('Ngày đặt bàn', 'bookawesome'),
                'action' => __('Action', 'bookawesome'),
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

            global $myplugin;
            $columns  = $this->get_columns();
            $hidden   = [];
            $sortable = $this->get_sortable_columns();

            // here we configure table headers, defined in our methods
            $this->_column_headers = array($columns, $hidden, $sortable);

            // [OPTIONAL] process bulk action if any
            $this->process_bulk_action();

            /** Process bulk action */
            $this->process_bulk_action();

            $result = new \WP_Query(['post_type' => 'awe_reservation',]);

            $argsId = [];

            if($result->have_posts() ) : while ( $result->have_posts() ) : $result->the_post(); ?>
                <?php
                $argsId[] = get_the_ID();

                ?>
            <?php endwhile; endif;

            $this->items = $argsId;

//            $bk_search_key = isset( $_REQUEST['s'] ) ? wp_unslash( trim( $_REQUEST['s'] ) ) : '';
//            if( $bk_search_key ) {
//                $this->items = $this->filter_table_data( $this->items, $bk_search_key );
//            }
//
//            $per_page = 5;
//            $current_page = $this->get_pagenum();
//            $total_items = count($this->items);
//            $found_data = array_slice($this->items,(($current_page-1)*$per_page),$per_page);
//            $this->set_pagination_args(array(
//                'total_items' => $total_items,
//                'per_page'    => $per_page,
//            ));
//            $this->items = $found_data;
        }

//        function filter_table_data($data_item, $search_key) {
//            $filtered_table_data = array_values( array_filter( $data_item, function( $row ) use( $search_key ) {
//                foreach( $row as $row_val ) {
//                    if( stripos( $row_val, $search_key ) !== false ) {
//                        return true;
//                    }
//                }
//            } ) );
//
//            return $filtered_table_data;
//        }

    }
