ridvanbaluyos/semaphore
=======

A Semaphore API package for Laravel 4.2

> This package makes use of the [Semaphore SMS API](http://http://semaphore.co/).<br />

<br />
[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/semaphore/v/stable)](https://packagist.org/packages/ridvanbaluyos/semaphore) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/semaphore/downloads)](https://packagist.org/packages/ridvanbaluyos/semaphore) [![Latest Unstable Version](https://poser.pugx.org/ridvanbaluyos/semaphore/v/unstable)](https://packagist.org/packages/ridvanbaluyos/semaphore) [![License](https://poser.pugx.org/ridvanbaluyos/semaphore/license)](https://packagist.org/packages/ridvanbaluyos/semaphore)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/a00a62b826474e7e929a65adfc8f1df4)](https://www.codacy.com/app/ewoklabs/semaphore?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=ridvanbaluyos/semaphore&amp;utm_campaign=Badge_Grade)

## Table of contents ##
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
    - [Sending to SMS](#sending-sms-to-users)
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
