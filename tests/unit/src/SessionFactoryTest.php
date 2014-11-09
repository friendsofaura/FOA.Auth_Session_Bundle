<?php
namespace FOA\Auth_Session_Bundle;

use RandomLib\Factory as RandomLibFactory;
use SecurityLib\Strength;

class SessionFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    public function testNewInstance()
    {
        $session_factory = new SessionFactory();
        $session = $session_factory->newInstance($_COOKIE);
        $this->assertInstanceof('FOA\Auth_Session_Bundle\Session', $session);
    }

    public function testGetGenerator()
    {
        $session_factory = new SessionFactory();
        $generator = $session_factory->getGenerator();
        $this->assertInstanceof('RandomLib\Generator', $generator);
    }

    public function testSetGenerator()
    {
        $session_factory = new SessionFactory();
        $factory = new RandomLibFactory;
        $generator = $factory->getLowStrengthGenerator();
        $session_factory->setGenerator($generator);
        $expected = $session_factory->getGenerator();
        $this->assertSame($generator, $expected);
    }
}
