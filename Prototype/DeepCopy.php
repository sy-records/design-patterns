<?php
/**
 * 深复制
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/10/25
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */


namespace Luffy\DesignPatterns\Prototype;


class DeepCopy implements Prototype
{
    private $keyboard;

    public function __construct()
    {
        echo '美丽的姐姐'.PHP_EOL;
    }

    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
    }

    public function get()
    {
        echo '我想要个'.$this->keyboard->name. '的键盘' .PHP_EOL;
    }

    public function __clone()
    {
        $this->keyboard = clone $this->keyboard;
    }
}