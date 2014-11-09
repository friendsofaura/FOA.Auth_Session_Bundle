<?php
namespace FOA\Auth_Session_Bundle\_Config;

use Aura\Di\Container;
use Aura\Di\Config;
use RandomLib\Factory as RandomLibFactory;

class Common extends Config
{
    public function define(Container $di)
    {
        $di->set('aura/session:session', $di->lazyNew('FOA\Auth_Session_Bundle\Session'));
        $di->set('aura/auth:session', $di->lazyGet('aura/session:session'));
        $di->params['Aura\Auth\Auth'] = array(
            'segment' => $di->lazyNew('FOA\Auth_Session_Bundle\Segment')
        );

        $di->params['FOA\Auth_Session_Bundle\RandomVal']['generator'] = $di->lazy(function () {
            $factory = new RandomLibFactory;
            $generator = $factory->getMediumStrengthGenerator();
            return $generator;
        });
        $di->params['Aura\Session\CsrfTokenFactory']['randval'] = $di->lazyNew('FOA\Auth_Session_Bundle\RandomVal');
        $di->params['Aura\Session\Segment'] = array(
            'session' => $di->lazyGet('aura/session:session'),
            'name' => 'FOA_Auth_Session_Bundle'
        );
    }

    public function modify(Container $di)
    {
    }
}
