<?php
/**
 * Created by PhpStorm.
 * User: yiranzai
 * Date: 19-3-22
 * Time: 下午2:19
 */

namespace Yiranzai\Byrobot\Traits;

/**
 * Trait Base
 * @package Yiranzai\Byrobot\Traits
 */
trait Base
{
    /**
     * @var string
     */
    private static $appKey;
    /**
     * @var string
     */
    private static $appSecret;
    /**
     * 接口域名
     * @var string
     */
    private static $baseUrl = 'https://api.byrobot.cn';
    /**
     * 接口版本
     * @var string
     */
    private static $apiVersion = 'v1';

    /**
     * @var array
     */
    public static $url = [
        'getCompanys'           => [
            'url'    => '/openapi/{apiVersion}/company/getCompanys',
            'method' => 'GET',
            'desc'   => '获取绑定公司列表接口',
        ],
        'getPhones'             => [
            'url'    => '/openapi/{apiVersion}/company/getPhones',
            'method' => 'GET',
            'desc'   => '获取公司的主叫电话列表接口',
        ],
        'getRobots'             => [
            'url'    => '/openapi/{apiVersion}/company/getRobots',
            'method' => 'GET',
            'desc'   => '获取公司的机器人话术列表接口',
        ],
        'addBlackList'          => [
            'url'    => '/openapi/{apiVersion}/company/addBlackList',
            'method' => 'POST',
            'desc'   => '添加单个黑名单到公司默认黑名单组接口',
        ],
        'statistics'            => [
            'url'    => '/openapi/{apiVersion}/company/seat/statistics',
            'method' => 'GET',
            'desc'   => '获取公司AI坐席概况接口',
        ],
        'createTask'            => [
            'url'    => '/openapi/{apiVersion}/task/createTask',
            'method' => 'POST',
            'desc'   => '创建任务接口',
        ],
        'start'                 => [
            'url'    => '/openapi/{apiVersion}/task/start',
            'method' => 'POST',
            'desc'   => '启动任务接口',
        ],
        'pause'                 => [
            'url'    => '/openapi/{apiVersion}/task/pause',
            'method' => 'POST',
            'desc'   => '暂停任务接口',
        ],
        'stop'                  => [
            'url'    => '/openapi/{apiVersion}/task/stop',
            'method' => 'POST',
            'desc'   => '停止任务接口',
        ],
        'delete'                => [
            'url'    => '/openapi/{apiVersion}/task/delete',
            'method' => 'POST',
            'desc'   => '删除任务',
        ],
        'importTaskCustomer'    => [
            'url'    => '/openapi/{apiVersion}/task/importTaskCustomer',
            'method' => 'POST',
            'desc'   => '向任务中导入客户接口',
        ],
        'update'                => [
            'url'    => '/openapi/{apiVersion}/task/update',
            'method' => 'POST',
            'desc'   => '修改任务',
        ],
        'call'                  => [
            'url'    => '/openapi/{apiVersion}/task/call',
            'method' => 'POST',
            'desc'   => '单次电话外呼',
        ],
        'singleCallByMobile'    => [
            'url'    => '/openapi/{apiVersion}/task/singleCallByMobile',
            'method' => 'POST',
            'desc'   => '根据手机号进行单次电话外呼',
        ],
        'getTasks'              => [
            'url'    => '/openapi/{apiVersion}/task/getTasks',
            'method' => 'GET',
            'desc'   => '获取任务列表接口',
        ],
        'getTaskDetail'         => [
            'url'    => '/openapi/{apiVersion}/task/getTaskDetail',
            'method' => 'GET',
            'desc'   => '获取任务详情接口',
        ],
        'queryDoneTaskPhones'   => [
            'url'    => '/openapi/{apiVersion}/task/queryDoneTaskPhones',
            'method' => 'POST',
            'desc'   => '获取已经完成任务电话号码接口',
        ],
        'notDialedCustomerList' => [
            'url'    => '/openapi/{apiVersion}/task/notDialedCustomerList',
            'method' => 'POST',
            'desc'   => '获取任务未开始的电话列表',
        ],
        'phoneLogInfo'          => [
            'url'    => '/openapi/{apiVersion}/task/phoneLogInfo',
            'method' => 'GET',
            'desc'   => '获取一个通话的详情接口',
        ],
    ];

    /**
     * @param $key
     * @return $this
     */
    public function key($key): self
    {
        self::$appKey = $key;
        return $this;
    }

    /**
     * @param $secret
     * @return $this
     */
    public function secret($secret): self
    {
        self::$appSecret = $secret;
        return $this;
    }

    /**
     * @param $version
     * @return $this
     */
    public function version($version): self
    {
        self::$apiVersion = $version;
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function url($url): self
    {
        self::$baseUrl = $url;
        return $this;
    }
}
