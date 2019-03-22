<?php
/**
 * Created by PhpStorm.
 * User: yiranzai
 * Date: 19-3-19
 * Time: 下午6:43
 */

namespace Yiranzai\Byrobot\Traits;

/**
 * Class Byrobot
 * @package App\Traits
 */
trait Byrobot
{
    /**
     * @var int
     */
    public static $maxTaskPageSize = (2 << 30) - 1;

    /**
     * @var int
     */
    public static $maxPhoneLogPageSize = 50;

    /**
     * @var array
     */
    public static $errorCode = [
        200 => '执行成功',
        401 => '校验数据错误',
        404 => '资源未找到',
        403 => '权限不足',
        412 => '参数错误',
        500 => '未知错误',
    ];

    /**
     * @var array
     */
    public static $queryLevelMap = [
        0 => '',
        1 => 'A级(较强)',
        2 => 'B级(一般)',
        3 => 'C级(很少)',
        4 => 'D级(需筛选)',
        5 => 'E级(需要再次跟进)',
        6 => 'F级(无需跟进)',
    ];

    /**
     * @var array
     */
    public static $levelToNum = [
        'A' => 1,
        'B' => 2,
        'C' => 3,
        'D' => 4,
        'E' => 5,
        'F' => 6,
    ];

    /**
     * @var array
     */
    public static $levelMap = [
        0 => '',
        1 => 'A(有明确意向)',
        2 => 'B(可能有意向)',
        3 => 'C(明确拒绝)',
        4 => 'D(用户忙)',
        5 => 'E(拨打失败)',
        6 => 'F(无效客户)',
    ];
}
