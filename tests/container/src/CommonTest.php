<?php
namespace FOA\Auth_Session_Bundle\_Config;

use Aura\Di\_Config\AbstractContainerTest;

class CommonTest extends AbstractContainerTest
{
    protected function getConfigClasses()
    {
        return array(
            'Aura\Auth\_Config\Common',
            'Aura\Session\_Config\Common',
            'FOA\Auth_Session_Bundle\_Config\Common',
        );
    }

    public function provideGet()
    {
        return array(
            array('aura/auth:auth', 'Aura\Auth\Auth'),
            array('aura/auth:session', 'FOA\Auth_Session_Bundle\Session'),
            array('aura/session:session', 'FOA\Auth_Session_Bundle\Session'),
        );
    }

    public function provideNewInstance()
    {
        return array(
            array('Aura\Auth\Auth'),
            array('FOA\Auth_Session_Bundle\RandomVal'),
            array('FOA\Auth_Session_Bundle\Segment'),
            array('FOA\Auth_Session_Bundle\Session'),
        );
    }

    protected function getAutoResolve()
    {
        return false;
    }
}
