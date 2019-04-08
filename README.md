# php-byrobot

[ENGLISH](docs/README_EN.md) | [中文](README.md)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](docs/LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

百应智能外呼系统 API

## 目录

```
src/
tests/
```

## 安装

Via Composer

```bash
$ composer require yiranzai/byrobot
```

## 使用

### 初始化

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

-   `$robot->getCompanys()` // 获取绑定公司列表接口
-   `$robot->getPhones()` // 获取公司的主叫电话列表接口
-   `$robot->getRobots()` // 获取公司的机器人话术列表接口
-   `$robot->addBlackList()` // 添加单个黑名单到公司默认黑名单组接口
-   `$robot->statistics()` // 获取公司 AI 坐席概况接口
-   `$robot->createTask()` // 创建任务接口
-   `$robot->start()` // 启动任务接口
-   `$robot->pause()` // 暂停任务接口
-   `$robot->stop()` // 停止任务接口
-   `$robot->delete()` // 删除任务
-   `$robot->importTaskCustomer()` // 向任务中导入客户接口
-   `$robot->update()` // 修改任务
-   `$robot->call()` // 单次电话外呼
-   `$robot->singleCallByMobile()` // 根据手机号进行单次电话外呼
-   `$robot->getTasks()` // 获取任务列表接口
-   `$robot->getTaskDetail()` // 获取任务详情接口
-   `$robot->queryDoneTaskPhones()` // 获取已经完成任务电话号码接口
-   `$robot->notDialedCustomerList()` // 获取任务未开始的电话列表
-   `$robot->phoneLogInfo()` // 获取一个通话的详情接口

## Change log

Please see [CHANGELOG](docs/CHANGELOG.md) for more information on what has changed recently.

## 测试

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](docs/CONTRIBUTING.md) and [CODE_OF_CONDUCT](docs/CODE_OF_CONDUCT.md) for details.

## 安全

If you discover any security related issues, please email wuqingdzx@gmail.com instead of using the issue tracker.

## Credits

-   [yiranzai][link-author]
-   [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](docs/LICENSE.md) for more information.

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
