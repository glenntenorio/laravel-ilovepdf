Laravel iLovePDF
================

[![License](https://poser.pugx.org/glenntenorio/laravel-ilovepdf/license)](https://packagist.org/packages/glenntenorio/laravel-ilovepdf)
[![Latest Stable Version](https://poser.pugx.org/glenntenorio/laravel-ilovepdf/v/stable)](https://packagist.org/packages/glenntenorio/laravel-ilovepdf)
[![Total Downloads](https://poser.pugx.org/glenntenorio/laravel-ilovepdf/downloads)](https://packagist.org/packages/glenntenorio/laravel-ilovepdf)
[![CircleCI](https://circleci.com/gh/glenntenorio/laravel-ilovepdf.svg?style=shield)](https://circleci.com/gh/glenntenorio/laravel-ilovepdf)

A Laravel package library for [iLovePDF API](https://developer.ilovepdf.com) based on the [iLovePDF PHP Library](https://github.com/ilovepdf/ilovepdf-php)

You can sign up for a iLovePDF account at https://developer.ilovepdf.com

Develop and automate PDF processing tasks like Compress PDF, Merge PDF, Split PDF, convert Office to PDF, PDF to JPG, Images to PDF, add Page Numbers, Rotate PDF, Unlock PDF, stamp a Watermark and Repair PDF. Each one with several settings to get your desired results.

## Requirements

PHP 7.0 and later.
Laravel 5.5 and later.

## Install

### Using composer

This package can be used in Laravel 5.5 or higher. You can install the library via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require glenntenorio/laravel-ilovepdf
```

The service provider and alias will automatically get registered. Or you may manually add them in your `config/app.php` file:

```php
'providers' => [
    // ...
    GlennTenorio\LaravelIlovepdf\LaravelIlovepdfServiceProvider::class,
];

'aliases' => [
    // ...
    'IlovePDF' => GlennTenorio\LaravelIlovepdf\Facades\Ilovepdf::class,
];
```

You can publish the config with:

```bash
php artisan vendor:publish --provider="GlennTenorio\LaravelIlovepdf\LaravelIlovepdfServiceProvider" --tag="config"
```

### Setup API Keys

Sign up for an iLovePDF account at https://developer.ilovepdf.com to get your `Project Key` and `Secret Key`

Add the following in your `.env` file:

```
...
ILOVEPDF_PROJECT_KEY=YOUR_PROJECT_KEY
ILOVEPDF_SECRET_KEY=YOUR_SECRET_KEY
```


## Getting Started

Simple usage looks like:

```php
$myTask = ILovePDF::newTask('compress');

$file1 = $myTask->addFile('file1.pdf');

$myTask->execute();

$myTask->setOutputFilename('output.pdf');

$myTask->download();
```


## Documentation

Please see https://developer.ilovepdf.com/docs for up-to-date documentation.
