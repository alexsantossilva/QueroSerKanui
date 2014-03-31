<?php
/**
 * Created by JetBrains PhpStorm.
 * User: asilva
 * Date: 27/03/14
 * Time: 16:45
 * To change this template use File | Settings | File Templates.
 */

namespace QueroSerKanui\src;

class KaNois {

    public static function convert($number){
        if ($number % 7 == 0 and 0 == $number % 5 ){
            return 'KaNois';
        }
        return $number;
    }
}