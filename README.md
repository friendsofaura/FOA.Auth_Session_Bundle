# FOA.Auth_Session_Bundle

Integrate `aura/session` and `aura/auth`.

## Foreword

### Installation

```
composer require foa/auth-session-bundle
```

### Quality

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/friendsofaura/FOA.Auth_Session_Bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/friendsofaura/FOA.Auth_Session_Bundle/)
[![Code Coverage](https://scrutinizer-ci.com/g/friendsofaura/FOA.Auth_Session_Bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/friendsofaura/FOA.Auth_Session_Bundle/)
[![Build Status](https://travis-ci.org/friendsofaura/FOA.Auth_Session_Bundle.png?branch=master)](https://travis-ci.org/friendsofaura/FOA.Auth_Session_Bundle)

> First install the dependencies via the command : composer install

To run the unit tests at the command line, issue `./vendor/bin/phpunit`.

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
