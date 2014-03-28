<?php
/**
 * Created by JetBrains PhpStorm.
 * User: asilva
 * Date: 27/03/14
 * Time: 16:45
 * To change this template use File | Settings | File Templates.
 */

namespace QueroSerKanui;


class Ka {
    public static function convert($number){
        if ($number % 5 == 0){
            return 'Ka';
        }
        return $number;
    }
}