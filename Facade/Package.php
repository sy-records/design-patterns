<?php

/**
 * Package
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/11/29
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Facade;

class Package
{
    public function pickup()
    {
        echo "上门取件\n";
    }

    public function inspection()
    {
        echo "验视\n";
    }

    public function bale()
    {
        echo "打包\n";
    }

    public function sendOut()
    {
        echo "寄出\n";
    }
}
