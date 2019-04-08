# php-byrobot

[ENGLISH](README_EN.md) | [中文](../README.md)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

php byrobot openapi

## Structure

```
src/
tests/
```

## Install

Via Composer

```bash
$ composer require yiranzai/byrobot
```

## Usage

### Init

```php
$robot = Yiranzai\Byrobot\Byrobot::init(
    [
        'appKey' => 'YOU_APP_KEY',
        'appSecret' => 'YOU_APP_SECRET'
    ]);
```

or

```php
$robot = Yiranzai\Byrobot\Byrobot::init();
$robot->key(YOU_APP_KEY)->secret(YOU_APP_SECRET);
```

### API

-   `$robot->getCompanys()` // Get the binding company list interface
-   `$robot->getPhones()` // Get the company's calling list interface
-   `$robot->getRobots()` // Get the company's robotic speech list interface
-   `$robot->addBlackList()` // Add a single blacklist to the company default blacklist group interface
-   `$robot->statistics()` // Get the company AI agent profile interface
-   `$robot->createTask()` // Create a task interface
-   `$robot->start()` // Start the task interface
-   `$robot->pause()` // Pause task interface
-   `$robot->stop()` // Stop the task interface
-   `$robot->delete()` // delete the task
-   `$robot->importTaskCustomer()` // Import the client interface into the task
-   `$robot->update()` // modify the task
-   `$robot->call()` // Single call outside call
-   `$robot->singleCallByMobile()` // Make a single call based on the phone number
-   `$robot->getTasks()` // Get the task list interface
-   `$robot->getTaskDetail()` // Get the task details interface
-   `$robot->queryDoneTaskPhones()` // Get the completed phone number interface
-   `$robot->notDialedCustomerList()` // Get a list of calls that the task has not started
-   `$robot->phoneLogInfo()` // Get a call details interface

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email wuqingdzx@gmail.com instead of using the issue tracker.

## Credits

-   [yiranzai][link-author]
-   [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/yiranzai/byrobot.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/yiranzai/php-byrobot/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/yiranzai/php-byrobot.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/yiranzai/php-byrobot.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/yiranzai/byrobot.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/yiranzai/byrobot
[link-travis]: https://travis-ci.org/yiranzai/php-byrobot
[link-scrutinizer]: https://scrutinizer-ci.com/g/yiranzai/php-byrobot/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/yiranzai/php-byrobot
[link-downloads]: https://packagist.org/packages/yiranzai/byrobot
[link-author]: https://github.com/yiranzai
[link-contributors]: ../../contributors
