<?php
/*
Plugin Name: . Pre-Print
Plugin URI: https://purplebox.digital/
Description: Adds a custom PHP function for developers: <strong>pre_print($data);</strong>. This prettifys $data to make it more humanly readable. Optional: You can use <strong>pre_print($data, 1);</strong> to exit the script after showing $data result(s) on screen. Note: $data can be a PHP string, array or object.
Version: 1.0.0
Author: Jeff L
Author URI: https://purplebox.digital/
*/

/**
 * For debug only
 * pre_print($data = string/array/object, $status = 0 or 1);
 */
function pre_print($data = '', $status = 0) {

    echo "<pre>";
    print_r($data);
    echo "</pre>";

    if(!empty($status)){
        die();
    }
}
