# php-byrobot

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

百应智能外呼系统API

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
src/
tests/
```


## Install

Via Composer

``` bash
$ composer require yiranzai/byrobot
```

## Usage

``` php
$skeleton = new Yiranzai\Byrobot();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email wuqingdzx@gmail.com instead of using the issue tracker.

## Credits

- [yiranzai][link-author]
- [All Contributors][link-contributors]

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
