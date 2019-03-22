<?php
/**
 * Created by PhpStorm.
 * User: yiranzai
 * Date: 19-3-22
 * Time: 下午3:15
 */

namespace Yiranzai\Byrobot\Tests;

use PHPUnit\Framework\TestCase;
use Yiranzai\Byrobot\Byrobot;

/**
 * Class ByrobotTest
 * @package Yiranzai\Byrobot\Tests
 */
class ByrobotTest extends TestCase
{
    /**
     *
     */
    public function testByrobotOne()
    {
        $robot = Byrobot::init(['appKey' => 'test', 'appSecret' => 'test']);
        $this->assertSame($robot, Byrobot::init());
        $this->assertSame($robot, Byrobot::init());
    }

    /**
     *
     */
    public function testByrobotTwo()
    {
        $robot  = Byrobot::init(['appKey' => 'test', 'appSecret' => 'test']);
        $msgOne = $msgTwo = null;
        try {
            $robot->getCompanys();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->getCompanys([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->getPhones();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->getPhones([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->getRobots();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->getRobots([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->addBlackList();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->addBlackList([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->statistics();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->statistics([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->createTask();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->createTask([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->start();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->start([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->pause();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->pause([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->stop();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->stop([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->delete();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->delete([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->importTaskCustomer();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->importTaskCustomer([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->update();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->update([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->call();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->call([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->singleCallByMobile();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->singleCallByMobile([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->getTasks();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->getTasks([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->getTaskDetail();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->getTaskDetail([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->queryDoneTaskPhones();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->queryDoneTaskPhones([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->notDialedCustomerList();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->notDialedCustomerList([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
        try {
            $robot->phoneLogInfo();
        } catch (\Exception $e) {
            $msgOne = $e->getMessage();
        }
        try {
            $robot->phoneLogInfo([], true);
        } catch (\Exception $e) {
            $msgTwo = $e->getMessage();
        }
        $this->assertSame($msgOne, $msgTwo);
    }

    /**
     * @throws \Exception
     */
    public function testByrobotExceptionOne()
    {
        $this->expectException(\Exception::class);
        $robot = Byrobot::init();
        $robot->getCompanys();
    }

    /**
     * @throws \Exception
     */
    public function testByrobotExceptionTwo()
    {
        $this->expectException(\Exception::class);
        $robot = Byrobot::init(['appKey' => 'test', 'appSecret' => 'test']);
        $robot->getTasks(['pageSize' => (2 << 32)]);
    }

    /**
     * @throws \Exception
     */
    public function testByrobotExceptionThree()
    {
        $this->expectException(\Exception::class);
        $robot = Byrobot::init(['appKey' => 'test', 'appSecret' => 'test']);
        $robot->queryDoneTaskPhones(['pageSize' => 51]);
    }
}
