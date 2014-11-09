<?php
namespace FOA\Auth_Session_Bundle;

use FOA\Auth_Session_Bundle\SessionFactory;
use FOA\Auth_Session_Bundle\Segment;

class AuthFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testNewInstance()
    {
        $session_factory = new SessionFactory();
        $session = $session_factory->newInstance($_COOKIE);
        $segment = new Segment($session, 'Aura\Auth\Session');
        $auth_factory = new \Aura\Auth\AuthFactory($_COOKIE, $session, $segment);
        $auth = $auth_factory->newInstance();
        $this->assertInstanceof('Aura\Auth\Auth', $auth);
    }
}
