# person-name

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

PHP package to present one's name in various formats (doesn't include titulations).

## Install

Via Composer

``` bash
$ composer require druc/person-name
```

## Usage

```php
<?php
// Create instance
$name = PersonName::make('Constantin Druc');

// Get full name
$name->full; // Constantin Druc

// Get first name
$name->first; // Constantin

// Get last name
$name->last; // Druc

// Get name initials
$name->initials; // CD

// Get familiar name
$name->familiar; // Constantin D.

// Get abbreviated name
$name->abbreviated; // C. Druc

// Get sorted name
$name->sorted; // Druc, Constantin

// Get mentionable name
$name->mentionable; // constantind

// Get possessive name
$name->possessive; // Constantin Druc's
```

## Laravel usage
Initially I wanted to build a Laravel-only package but thinking about it, you can always use an accessor like this:
```php
<?php
// in App/User.php

public function getNameAttribute() 
{
    return PersonName::make($this->attributes['name']);
}

// Somewhere in your app
$user->name->familiar;
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email druc@pinsmile.com instead of using the issue tracker.

## Credits

- [Constantin Druc][link-author]
- Basecamp's rails version - [basecamp/name_of_person](https://github.com/basecamp/name_of_person)
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/druc/person-name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/druc/person-name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/druc/person-name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/druc/person-name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/druc/person-name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/druc/person-name
[link-travis]: https://travis-ci.org/druc/person-name
[link-scrutinizer]: https://scrutinizer-ci.com/g/druc/person-name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/druc/person-name
[link-downloads]: https://packagist.org/packages/druc/person-name
[link-author]: https://github.com/druc
[link-contributors]: ../../contributors
