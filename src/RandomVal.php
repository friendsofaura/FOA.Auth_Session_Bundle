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

class RandomVal implements RandvalInterface
{
    /**
     * Generates a 32 bit string
     * Curious why 16 being passed ?
     * @see https://github.com/thephpleague/oauth2-client/blob/aad09cb91fe35740fa754402e5ec203f215a85e5/src/Provider/AbstractProvider.php#L267
     */
    public function generate()
    {
        return bin2hex(random_bytes(16));
    }
}
