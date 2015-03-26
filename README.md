# Captcha
Simple Captcha for laravel 5

## Preview

	![alt Captcha](https://github.com/DearMadMan/Captcha/preview.jpg)

## Installation

The Captcha Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`dearmadman/captcha` package and setting the `minimum-stability` to `dev` (required for Laravel 5) in your
project's `composer.json`.

```json
{
    "require": {
        "laravel/framework": "5.0.*",
        "dearmadman/captcha": "dev-master"
    },
    "minimum-stability": "dev"
}
```

## Usage

To use the Captcha Service Provider, you must register the provider when bootstrapping your Laravel application. There are
essentially two ways to do this.

Find the `providers` key in `app/config/app.php` and register the Captcha Service Provider.

```php
    'providers' => array(
        // ...
        'Dearmadman\Captcha\CaptchaServiceProvider',
    )
```

## Example Usage

```php

    // [your site path]/app/routes.php

   Route::get('captcha',function(Captcha $captcha){

    $captcha->InitFromArray([
        'width'=>100,
        'height'=>50,
        'chinese'=>true,
        'char_num'=>5,
        'line_x'=>3,
        'line_y'=>2,
        'pixel'=>300
    ]);
    return $captcha->PushImage();

	});

    Route::get('check',function(Captcha $captcha){

    return $captcha->check('板迷的细财')?'ok':'wrong';
    
	});

```

^_^