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

use Aura\Session\Phpfunc;
use Aura\Session\CsrfTokenFactory;
use Aura\Session\SegmentFactory;
use FOA\Auth_Session_Bundle\RandomVal;
use RandomLib\Generator;
use RandomLib\Factory as RandomLibFactory;

/**
 *
 * A factory to create a Session manager.
 *
 * @package FOA.Auth_Session_Bundle
 *
 */
class SessionFactory
{
    protected $generator;

    /**
     *
     * Creates a new Session manager.
     *
     * @param array $cookies An array of cookie values, typically $_COOKIE.
     *
     * @param callable $delete_cookie A alternative callable to invoke when
     * deleting the session cookie.
     *
     */
    public function newInstance(array $cookies, $delete_cookie = null)
    {
        $phpfunc = new Phpfunc;
        return new Session(
            new SegmentFactory,
            new CsrfTokenFactory(new RandomVal($this->getGenerator())),
            $phpfunc,
            $cookies,
            $delete_cookie
        );
    }

    /**
     *
     * Generator to create random value
     *
     * @return Generator
     *
     */
    public function getGenerator()
    {
        if (! $this->generator instanceof Generator) {
            $factory = new RandomLibFactory;
            $this->generator = $factory->getMediumStrengthGenerator();
        }
        return $this->generator;
    }

    /**
     *
     * @param Generator $generator Random value generator
     *
     * @return null
     *
     */
    public function setGenerator(Generator $generator)
    {
        $this->generator = $generator;
    }
}
