<?php
/**
 * 浅复制
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/10/24
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Prototype;

class ShallowCopy
{
    private $keyboard;

    public function __construct()
    {
        echo '亲爱的大哥'.PHP_EOL;
    }

    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
    }

    public function get()
    {
        echo '我想要个'.$this->keyboard->name. '的键盘' .PHP_EOL;
    }
}