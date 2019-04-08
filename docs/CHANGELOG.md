# Changelog

All notable changes to `byrobot` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## v0.2.1 - 2019-04-08

简单修复composer依赖

### Fixed

fix `yiranzai/tools` from `^0.1.0` to `~0.1`

## v0.2 - 2019-03-22

简单修复

### Fixed

- `$robot->getTasks()` // pageSize限制有错误修正为 `(2<<30) -1`
- `$robot->queryDoneTaskPhones()` // pageSize限制有错误，修正为 `50`

## v0.1 - 2019-03-21
初步完成
### Added

- `$robot->getCompanys()` // 获取绑定公司列表接口
- `$robot->getPhones()` // 获取公司的主叫电话列表接口
- `$robot->getRobots()` // 获取公司的机器人话术列表接口
- `$robot->addBlackList()` // 添加单个黑名单到公司默认黑名单组接口
- `$robot->statistics()` // 获取公司AI坐席概况接口
- `$robot->createTask()` // 创建任务接口
- `$robot->start()` // 启动任务接口
- `$robot->pause()` // 暂停任务接口
- `$robot->stop()` // 停止任务接口
- `$robot->delete()` // 删除任务
- `$robot->importTaskCustomer()` // 向任务中导入客户接口
- `$robot->update()` // 修改任务
- `$robot->call()` // 单次电话外呼
- `$robot->singleCallByMobile()` // 根据手机号进行单次电话外呼
- `$robot->getTasks()` // 获取任务列表接口
- `$robot->getTaskDetail()` // 获取任务详情接口
- `$robot->queryDoneTaskPhones()` // 获取已经完成任务电话号码接口
- `$robot->notDialedCustomerList()` // 获取任务未开始的电话列表
- `$robot->phoneLogInfo()` // 获取一个通话的详情接口

