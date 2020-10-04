<?php
namespace MyPlugin\Params\Reservation\Backend;

/**
 * @author Nguyen Anh Tuan
 * @version 1.0
 * @package Reservation
 *
 * Ajax backend module reservation
 */
class ReservationBackend
{
    public function __construct()
    {
        $argsAction = [
            'awe_manage_reservation'  => array($this, 'manageReservation'),
        ];

        foreach ($argsAction as $key => $value) {
            add_action('wp_ajax_'.$key, $value);
            add_action('wp_ajax_nopriv_'.$key, $value);
        }
    }

    public function manageReservation() {
        $status = false;

        if(!empty($_POST['id'])) {
            update_post_meta($_POST['id'], 'awe_reservation_status', 1);
            $status = true;
        } else {
            $status = false;
        }

        echo wp_json_encode($status);
        wp_die();


    }


}
