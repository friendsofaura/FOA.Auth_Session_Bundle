<?php
/**
 *
 * This file is part of friends of aura.
 *
 * @package FOA.Auth_Session_Bundle
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace FOA\Auth_Session_Bundle;

use RandomLib\Generator;
use RandomLib\Factory as RandomLibFactory;

class RandomValTest  extends \PHPUnit_Framework_TestCase
{
    public function testGenerate()
    {
        $random = new RandomVal();
        $this->assertEquals(32, strlen($random->generate()));
    }
}
