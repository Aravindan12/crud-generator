# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chillout/crud-generator.svg?style=flat-square)](https://packagist.org/packages/chillout/crud-generator)
[![Total Downloads](https://img.shields.io/packagist/dt/chillout/crud-generator.svg?style=flat-square)](https://packagist.org/packages/chillout/crud-generator)

This package is mainly created for get a crud files like Controller with basic crud functions, Model, Request file and api resources.By entering crud:generate {name} you will can those file in respective folders. You can modify as u you can.

## Installation

You can install the package via composer:

```bash
composer require chillout/crud-generator
```

## Usage
 After composer require command of this package
```php
 Need to run a command in your terminal 
    php artisan crud:generate {name}
 {name} can be replace with your name for example Post,Comment

How it is acheived?

Name you given in the command is get replaced by a dummy name added in the pre-added files.
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email aravindkumaranakr@gmail.com instead of using the issue tracker.

## Credits

-   [aravind](https://github.com/chillout)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
