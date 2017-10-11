<?php
/**
 * Project: DailyTimeLog v1.0
 * Purpose: To handle all the helper functions
 * Author: Vijay Felix
 * Review: Loganathan N
 * Date: 4th Sep'17
 */
namespace App\Helpers;

use App;
use Route;

class DailyTimeLogHelper {

    /**
     * To format hours
     * @param type $hour
     * @return type
     */
    public static function format_hours($hour) {
        if ($hour) {
            $hour = rtrim($hour, "00");
            $hour = ltrim($hour, 0);

            if (substr($hour, -1) == ",") {
                $hour = substr_replace($hour, "", -1);
            }
        }
        return $hour;
    }

    /**
     * To format date to norway format
     * @param type $date
     * @param type $format
     * @return type
     */
    public static function formatDate($date, $format = 'Y-m-d') {
        if ($date) {
            $date = new \DateTime($date);
            return $date->format($format);
        } else {
            $date = new \DateTime();
            return $date->format($format);
        }
    }

    /**
     * To generate dropdown values
     * @return string
     */
    public static function getStatus() {
        $status = ['In Progress' => 'In Progress', 'Completed' => 'Completed', 'Pending' => 'Pending',
            'Not Completed' => 'Not Completed', 'Postponed' => 'Postponed'];
        return $status;
    }

    /**
     * Date time format
     * @param type $date
     * @return type
     */
    public static function dateTime($date = false) {
        return ($date) ? date('d/m/Y, h.i a', strtotime($date)) : date('d/m/Y h:i:s');
    }

    /**
     * Date time format
     * @param type $date
     * @return type
     */
    public static function dateTimeFormat($date = false) {
        return ($date['registered_on']) ? date('d/m/Y, h.i a',
                        strtotime($date['registered_on'])) : date('d/m/Y, h.i a');
    }

    /**
     * To get date format
     * @param type $date
     * @param type $format
     * @return type
     */
    public static function getDateFormat($date, $format = 'd-M-Y') {
        return ($date) ? date('d-M-Y', strtotime($date)) : date('d-M-Y');
    }

}
