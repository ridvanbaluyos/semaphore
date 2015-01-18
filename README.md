ridvanbaluyos/chikka
=======

A Semaphore API package for Laravel 4.2

> This package makes use of the [Semaphore SMS API](http://http://semaphore.co/).<br />

<br />
[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/semaphore/v/stable.svg)](https://packagist.org/packages/ridvanbaluyos/semaphore) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/semaphore/downloads.svg)](https://packagist.org/packages/ridvanbaluyos/semaphore) [![Latest Unstable Version](https://poser.pugx.org/ridvanbaluyos/semaphore/v/unstable.svg)](https://packagist.org/packages/ridvanbaluyos/semaphore) [![License](https://poser.pugx.org/ridvanbaluyos/semaphore/license.svg)](https://packagist.org/packages/ridvanbaluyos/semaphore)

## Table of contents ##
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
    - [Receiving SMS](#receiving-sms-from-users)
    - [Account Status](#account-status)
    - [Message Logs](#message-logs)

## Installation ##
Open your `composer.json` file and add the following to the `require` key:

    "ridvanbaluyos/semaphore": "v0.1"

---

After adding the key, run composer update from the command line to install the package

```bash
composer update
```

Add the service provider to the `providers` array in your `app/config/app.php` file.

    'Ridvanbaluyos\Semaphore\SemaphoreServiceProvider'

## Configuration ##
Before you can start using the package we need to set some configurations.
To do so you must first publish the config file, you can do this with the following `artisan` command.

```bash
php artisan config:publish ridvanbaluyos/semaphore
```

## Usage ##
### Sending SMS to users
```php
Semaphore::send('Welcome to Semaphore!', '639981234567');
```

### Account Status
```php
Semaphore::account();
```

### Message Logs
```php
Semaphore::messages(); // fetches the first 100 logs
Semaphore::messages(2); // fetches the next 100 logs or page 2
```
