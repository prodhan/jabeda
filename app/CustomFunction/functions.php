<?php
/**
 * Created by Pigeon Soft.
 * User: Ariful Islam
 * Date: 14-Mar-19
 * Time: 4:41 AM
 */

if (!function_exists('getdebit')) {
    function getdebit($date)
    {
        $data=\App\Debit::where('date', '=', $date)->sum('amount');
        return $data;

    }

}
if (!function_exists('getcredit')) {
    function getcredit($date)
    {
        $data=\App\Credit::where('date', '=', $date)->sum('amount');
        return $data;

    }
}
