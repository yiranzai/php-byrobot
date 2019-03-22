<?php
/**
 * Created by PhpStorm.
 * User: yiranzai
 * Date: 19-3-19
 * Time: 上午10:32
 */

namespace Yiranzai\Byrobot;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Yiranzai\Byrobot\Traits\Base;
use Yiranzai\Byrobot\Traits\Byrobot as ByrobotTrait;
use Yiranzai\Tools\Date;
use Yiranzai\Tools\Tools;

/**
 * Class Byrobot
 * @package Yiranzai\Byrobot
 */
final class Byrobot
{
    use ByrobotTrait, Base;
    /**
     * @var array
     */
    private static $guarded = ['url', 'client', 'guarded'];
    /**
     * @var Client
     */
    private $client;

    /**
     * Byrobot constructor.
     * @param array $config
     */
    private function __construct(array $config = [])
    {

        foreach ($config as $key => $value) {
            if (in_array($key, self::$guarded, true)) {
                continue;
            }
            self::$$key = $value;
        }
    }

    /**
     * 获取绑定公司列表接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function getCompanys($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * @param       $str
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    private function send($str, $param = [], $isArr = false)
    {
        if (!$this->check()) {
            throw  new \RuntimeException('核心参数不足');
        }
        ['url' => $url, 'method' => $method, 'desc' => $desc] = $this->build($str);
        [$data, $msg] = $this->request($url, $method, $param, $isArr);
        if ($msg) {
            throw  new \RuntimeException($url . ' | ' . $desc . ' | ' . $msg);
        }
        return $data;
    }

    /**
     * @return bool
     */
    private function check(): bool
    {
        return self::$appKey !== null && self::$appSecret !== null;
    }

    /**
     * @param $str
     * @return array
     * @throws \Exception
     */
    protected function build($str): array
    {
        if (!isset(self::$url[$str])) {
            throw  new \RuntimeException($str . ' api not found');
        }
        $data        = self::$url[$str];
        $data['url'] = self::$baseUrl .
            str_replace('{apiVersion}', self::$apiVersion, $data['url']);
        return $data;
    }

    /**
     * @param string $url
     * @param string $method
     * @param array  $param
     * @param bool   $isArr
     * @return array
     */
    protected function request($url, $method, $param = [], $isArr = false): array
    {
        $msg = $json = null;
        try {
            $date  = Date::toCarbon()->toRfc7231String();
            $sign  = $this->generateSign($date);
            $query = [];

            $method = strtoupper($method);

            if ($method === 'GET') {
                $query['query'] = $param;
            }

            if ($method === 'POST') {
                $query['json'] = $param;
            }

            $query['headers'] = [
                'datetime' => $date,
                'appkey'   => self::$appKey,
                'sign'     => $sign
            ];
            $response         = $this->getClient()->request($method, $url, $query);
            //状态码不是200直接抛出异常
            if (200 !== $response->getStatusCode()) {
                throw new \RuntimeException('请求出错！'
                    . Tools::arrGet(self::$errorCode, $response->getStatusCode(), ''));
            }

            //返回的内容不是json,抛出异常
            $json = json_decode($response->getBody(), $isArr);
            if (JSON_ERROR_NONE !== json_last_error()) {
                $json = null;
                throw new \RuntimeException('请求结果异常！' . Tools::iteratorGet($json, 'resultMsg', ''));
            }

            if (200 !== $code = (int)Tools::iteratorGet($json, 'code')) {
                $json = null;
                throw new \RuntimeException('请求返回出错！' . Tools::arrGet(self::$errorCode, $code, ''));
            }
            $json = Tools::iteratorGet($json, 'data');
        } catch (\Throwable $e) {
            $msg = $e->getMessage();
        } catch (GuzzleException $e) {
            $msg = $e->getMessage();
        }
        return [$json, $msg];
    }

    /**
     * 加密
     * 规则：GMT时间 + "\n" + appKey
     *
     * @param String $date 时间：Thu, 13 Dec 2018 01:27:17 GMT
     * @return string
     */
    private function generateSign(string $date): string
    {
        if (function_exists('hash_hmac')) {
            return base64_encode(hash_hmac('sha1', self::$appKey . "\n" . $date, self::$appSecret, true));
        }
        return null;
    }

    /**
     * @return Client
     */
    protected function getClient(): Client
    {
        if (null === $this->client) {
            $this->client = new Client();
        }
        return $this->client;
    }

    /**
     * 获取公司的主叫电话列表接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function getPhones($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 获取公司的机器人话术列表接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function getRobots($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 添加单个黑名单到公司默认黑名单组接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function addBlackList($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 获取公司AI坐席概况接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function statistics($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 创建任务接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function createTask($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 启动任务接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function start($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 暂停任务接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function pause($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 停止任务接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function stop($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 删除任务
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function delete($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 向任务中导入客户接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function importTaskCustomer($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 修改任务
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function update($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 单次电话外呼
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function call($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 根据手机号进行单次电话外呼
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function singleCallByMobile($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 获取任务列表接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function getTasks($param = [], $isArr = false)
    {
        if (isset($param['pageSize']) && $param['pageSize'] > self::$maxTaskPageSize) {
            throw  new \RuntimeException('pageSize 不能大于' . self::$maxTaskPageSize);
        }
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 获取任务详情接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function getTaskDetail($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 获取已经完成任务电话号码接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function queryDoneTaskPhones($param = [], $isArr = false)
    {
        if (isset($param['pageSize']) && $param['pageSize'] > self::$maxPhoneLogPageSize) {
            throw  new \RuntimeException('pageSize 不能大于' . self::$maxPhoneLogPageSize);
        }
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 获取任务未开始的电话列表
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function notDialedCustomerList($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * 获取一个通话的详情接口
     *
     * @param array $param
     * @param bool  $isArr
     * @return array|object|null
     * @throws \Exception
     */
    public function phoneLogInfo($param = [], $isArr = false)
    {
        return $this->send(__FUNCTION__, $param, $isArr);
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    public function __wakeup()
    {
    }


    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }
}
