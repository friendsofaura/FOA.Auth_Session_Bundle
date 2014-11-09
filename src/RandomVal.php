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

use Aura\Session\RandvalInterface;
use RandomLib\Generator;

class RandomVal implements RandvalInterface
{
    protected $generator;

    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    public function generate()
    {
        $bytes = $this->generator->generate(32);
        return $bytes;
    }
}
