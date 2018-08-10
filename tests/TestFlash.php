<?php
namespace XuTL\Flash\Tests;

use Illuminate\Session\Store;
use PHPUnit\Framework\TestCase;
use XuTL\Flash\FlashNotifiy;

class TestFlash extends TestCase
{
    /**
     * @var FlashNotifiy
     */
    public $flash;

    public function setUp()
    {
        $this->flash = new FlashNotifiy();
    }

    public function testsuccess()
    {
        $this->flash->success('Hello');
        $this->assertEquals(Session::get('flash.message'), 'Hello');
    }

    public function testerror()
    {
        $this->flash->error('Hello');
        $this->assertEquals(Session::get('flash.message'), 'Hello');
    }

    public function testinfo()
    {
        $this->flash->info('Hello');
        $this->assertEquals(Session::get('flash.message'), 'Hello');
    }

    public function testwarning()
    {
        $this->flash->warning('Hello');
        $this->assertEquals(Session::get('flash.message'), 'Hello');
    }
}