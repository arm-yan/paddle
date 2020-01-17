# Omnipay: Paddle

**Paddle driver for the Omnipay Laravel payment processing library**
[![Latest Stable Version](https://poser.pugx.org/armyan/omnipay-paddle/v/stable)](https://packagist.org/packages/armyan/omnipay-paddle)
[![Total Downloads](https://poser.pugx.org/armyan/omnipay-paddle/downloads)](https://packagist.org/packages/armyan/omnipay-paddle)

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.5+. This package implements Paddle support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "armyan/omnipay-paddle": "1.0.0"
    }
}
```

And run composer to update your dependencies:

    composer update

Or you can simply run

    composer require armyan/omnipay-paddle

## Basic Usage

1. Use Omnipay gateway class:

```php
    use Omnipay\Omnipay;
```

2. Initialize Paddle gateway:

```php

    $gateway = Omnipay::create('Paddle');
    $gateway->setVendorId(env('VENDOR_KEY'));
    $gateway->setEnvironment(env('VENDOR_ENV'));
    $gateway->setProduct(1159); // Product/Subscription ID from Paddle
    $gateway->setTransactionId(XXXX); // Transaction ID from your system

```

3. Call purchase, it will automatically redirect to Paddle's hosted page

```php

    $purchase = $gateway->purchase()->send();
    $purchase->redirect();

```

4. Create a webhook controller to handle the callback request at your `RESULT_URL` and catch the webhook as follows

```php

    $gateway = Omnipay::create('Paddle');
    $gateway->setVendorId(env('VENDOR_KEY'));
    
    $purchase = $gateway->completePurchase()->send();
    
    // Do the rest with $purchase and response with 'OK'
    if ($purchase->isSuccessful()) {
        
        // Your logic
        
    }
    
    return new Response('OK');

```

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/arm-yan/omnipay-paddle/issues),
or better yet, fork the library and submit a pull request.
