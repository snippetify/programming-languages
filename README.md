# Programming languages collection

This package contains a collection of programming languages

## What it does

This library allows you 

1. To get a list of all programming languages
2. To test if a language exists in the collection
3. To count the number of languages available

## How to use it

```bash
$ composer require snippetify/programming-languages
```

```php
use Snippetify\ProgrammingLanguages\Languages;

// Get all languages
$languages = Languages::create()->all();

// Test if language exists
$exists = Languages::create()->exists('php');

// Count available languages
$count = Languages::create()->count();
```

##### You can use facade instead

```php
use Snippetify\ProgrammingLanguages\Facades\Languages;

// Get all languages
$languages = Languages::all();

// Test if language exists
$exists = Languages::exists('php');

// Count available languages
$count = Languages::count();
```



## Changelog

Please see [CHANGELOG](https://github.com/snippetify/programming-languages/blob/master/CHANGELOG.md) for more information what has changed recently.

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](https://github.com/snippetify/programming-languages/blob/master/CONTRIBUTING.md) for details.

## Credits

1. [Evens Pierre](https://github.com/pierrevensy)

## License

The MIT License (MIT). Please see [License File](https://github.com/snippetify/programming-languages/blob/master/LICENSE.md) for more information.

