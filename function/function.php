<?php
/**
 * Created by IntelliJ IDEA.
 * User: mcardenas
 * Date: 18/04/17
 * Time: 17:22
 */

/**
 * Function getClass Activate.
 * @param $ac_tmp
 * @return string
 */
function getActivate($ac_tmp){
    $ac = "";

    if (isset($_GET['ac'])){
       $ac = $_GET['ac'];
    }
    if ($ac == $ac_tmp) {
        $return = "active";
    } else {
        $return = "";
    }

    return $return;
}