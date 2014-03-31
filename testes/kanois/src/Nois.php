<?php
/**
 * Created by JetBrains PhpStorm.
 * User: asilva
 * Date: 27/03/14
 * Time: 16:45
 * To change this template use File | Settings | File Templates.
 */

namespace QueroSerKanui\src;


class Nois {
    public static function convert($number){
        if ($number % 7 == 0 ){
            return 'Nois';
        }
        return $number;
    }
}