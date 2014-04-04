<?php
/**
 * Created by JetBrains PhpStorm.
 * User: asilva
 * Date: 04/04/14
 * Time: 10:28
 * To change this template use File | Settings | File Templates.
 */

include "vendor/autoload.php";

use QueroSerKanui\Writer;

$start     = isset($argv[1]) ? $argv[1] : 1;
$end       = isset($argv[2]) ? $argv[2] : 100;

Writer::write($start,$end);