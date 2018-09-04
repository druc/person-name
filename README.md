# PersonName
PHP package to present one's name in various formats (doesn't include titulations).

## Installation and usage
`composer require druc/person-name`

```php
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
// in App/User.php

public function getNameAttribute() 
{
    return PersonName::make($this->attributes['name']);
}


// Somewhere in your app
$user->name->familiar;
```

## Credits
- Basecamp's rails version - [basecamp/name_of_person](https://github.com/basecamp/name_of_person)  

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
