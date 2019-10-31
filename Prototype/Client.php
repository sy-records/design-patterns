<?php
/**
 * User:çlufei
 * Date: 2019/10/24
 * Email: lufei@swoole.com.
 */

require  __DIR__ . '/../vendor/autoload.php';

use Luffy\DesignPatterns\Prototype\ShallowCopy;
use Luffy\DesignPatterns\Prototype\Keyboard;
use Luffy\DesignPatterns\Prototype\DeepCopy;

class Client
{
    /**
     * 浅复制
     */
    public static function shallowCopy()
    {
        $shallowCopy = new ShallowCopy();
        $keyboard = new Keyboard();
        $keyboard->name = "ikbc";
        $shallowCopy->setKeyboard($keyboard);
        $shallowCopy->get();

        echo "-----\n";
        // clone不会调用构造函数
        $cloneShallow = clone $shallowCopy;
        $cloneShallow->get();
    }

    public static function shallowCopy2()
    {
        $shallowCopy = new ShallowCopy();
        $keyboard = new Keyboard();
        $keyboard->name = "ikbc";
        $shallowCopy->setKeyboard($keyboard);
        $shallowCopy->get();

        echo "-----\n";
        // clone不会调用构造函数
        $cloneShallow = clone $shallowCopy;
        $cloneShallow->get();

        echo "=====\n";
        $keyboard->name = "hhkb";
        $shallowCopy->get();
        $cloneShallow->get();
    }

    public static function deepCopy()
    {
        $keyboard = new Keyboard();
        $keyboard->name = "ikbc";

        $deepCopy = new DeepCopy();
        $deepCopy->setKeyboard($keyboard);
        $deepCopy->get();

        echo "-----\n";
        $cloneDeep = clone $deepCopy;
        $cloneDeep->get();

        echo "=====\n";
        $keyboard->name = "hhkb";
        $deepCopy->get();

        $cloneDeep->get();
    }
}
Client::shallowCopy();
echo "***************".PHP_EOL;
Client::shallowCopy2();
echo "***************".PHP_EOL;
Client::deepCopy();
