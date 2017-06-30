<?php
namespace FOA\Auth_Session_Bundle;

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
}
