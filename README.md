# FOA.Auth_Session_Bundle

Integrate `aura/session`, `ircmaxell/random-lib` and `aura/auth`.

## Foreword

### Installation

This library requires PHP 5.3 or later, and has no userland dependencies.

It is installable and autoloadable via Composer as [foa/auth-session-bundle](https://packagist.org/packages/foa/auth-session-bundle).

### Quality

[![Build Status](https://travis-ci.org/friendsofaura/FOA.Auth_Session_Bundle.png?branch=develop-2)](https://travis-ci.org/friendsofaura/FOA.Auth_Session_Bundle)

> First install the dependencies via the command : composer install --dev

To run the unit tests at the command line, issue `phpunit -c tests/unit/`. (This requires [PHPUnit][] to be available as `phpunit`.)

[PHPUnit]: http://phpunit.de/manual/

To run the [Aura.Di][] container configuration tests at the command line, issue `phpunit -c tests/container/`.

[Aura.Di]: https://github.com/auraphp/Aura.Di
[Composer]: http://getcomposer.org/

This library attempts to comply with [PSR-1][], [PSR-2][], and [PSR-4][]. If
you notice compliance oversights, please send a patch via pull request.

[PSR-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[PSR-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md

### Community

To ask questions, provide feedback, or otherwise communicate with the Aura community, please join our [Google Group](http://groups.google.com/group/auraphp), follow [@auraphp on Twitter](http://twitter.com/auraphp), or chat with us on #auraphp on Freenode.

## Getting Started

### Instantiation

```php
$session_factory = new \FOA\Auth_Session_Bundle\SessionFactory();
$session = $session_factory->newInstance($_COOKIE);
$segment = new \FOA\Auth_Session_Bundle\Segment($session, 'Aura\Auth\Session');
$auth_factory = new \Aura\Auth\AuthFactory($_COOKIE, $session, $segment);
```

## Random Generator Strength

Under the hood, for CSRF token generation [RandomLib](https://github.com/ircmaxell/RandomLib) is used. By default the `\FOA\Auth_Session_Bundle\SessionFactory` creates generator of strength `SecurityLib\Strength::MEDIUM`. You can change the generator as below.

```php
$session_factory = new \FOA\Auth_Session_Bundle\SessionFactory();
$factory = new RandomLib\Factory;
// $generator = $factory->getHighStrengthGenerator();
$generator = $factory->getLowStrengthGenerator();
$session_factory->setGenerator($generator);
$session = $session_factory->newInstance();
```
