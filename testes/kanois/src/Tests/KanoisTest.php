<?php
/**
 * Created by JetBrains PhpStorm.
 * User: asilva
 * Date: 27/03/14
 * Time: 17:38
 * To change this template use File | Settings | File Templates.
 */

namespace QueroSerKanui\Tests;


use QueroSerKanui\Ka;
use QueroSerKanui\KaNois;
use QueroSerKanui\Nois;
use QueroSerKanui\Writer;

class KanoisTest extends \PHPUnit_Framework_TestCase {

    public function testKa(){
        $this->assertEquals('Ka', Ka::convert(5));
        $this->assertEquals(8, Ka::convert(8));
    }
    public function testNois(){
        $this->assertEquals('Nois', Nois::convert(7));
        $this->assertEquals(8, Ka::convert(8));
    }
    public function testKaNois(){
        $this->assertEquals('KaNois', KaNois::convert(35));
        $this->assertEquals(8, Ka::convert(8));
    }
}
