<?php
/**
 * Created by JetBrains PhpStorm.
 * User: asilva
 * Date: 28/03/14
 * Time: 09:34
 * To change this template use File | Settings | File Templates.
 */

namespace QueroSerKanui\src;

class Writer
{
    public static function calculate()
    {
        for ($i = 1; $i <= 100; $i++) {
            echo static::convert($i) . PHP_EOL;
        }
    }

    private static function convert($number)
    {
        foreach (array('QueroSerKanui\KaNois', 'QueroSerKanui\Nois', 'QueroSerKanui\Ka') as $strategy) {
            $strategy .= '::convert';
            $number = call_user_func($strategy, $number);
            if (is_string($number)) {
                break;
            }
        }
        return $number;
    }
}