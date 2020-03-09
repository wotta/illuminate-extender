# Command Extender

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wotta/command-extender.svg?style=flat-square)](https://packagist.org/packages/wotta/command-extender)
[![Build Status](https://img.shields.io/travis/wotta/command-extender/master.svg?style=flat-square)](https://travis-ci.org/wotta/command-extender)
[![Package](https://github.com/wotta/command-extender/workflows/Package/badge.svg)](https://github.com/wotta/command-extender)
[![Total Downloads](https://img.shields.io/packagist/dt/wotta/command-extender.svg?style=flat-square)](https://packagist.org/packages/wotta/command-extender)

A small package that adds extra commands that extend the default Laravel commands.

*Why command-extender?:*
- The ability to have extra functionality while still preserving all core code from Laravel.
- New commands that help with developing while working in the cli. 

## Installation

You can install the package via composer:

```bash
composer require wotta/command-extender
```

```bash
php artisan vendor:publish --tag=command-extender
```

## Usage

To use the new action filter for the `artisan route:list` command you need to do the following:

```bash
php artisan route:list --action=SomeController
```

There is also an option added to open files based on the current filters.

```bash
php artisan route:list --action=SomeController -o
```

This will result in the following output from which you can choose a file if there are results:
```bash
Which file would you like to open?:
  [0] App\Http\Controllers\HomeController: for route "home"
  [1] App\Http\Controllers\UsersController: for route "users"
```

If you haven't published the config file and set a default editor you can always add the `--editor` option to pass a editor.

```bash
php artisan route:list --action=SomeController -o --editor=vim
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email wouter.van.marrum@protonmail.com instead of using the issue tracker.

## Credits

- [Wouter van Marrum](https://github.com/wotta)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
