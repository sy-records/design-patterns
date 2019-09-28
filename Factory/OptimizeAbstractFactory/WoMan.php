<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\OptimizeAbstractFactory;

class WoMan implements HuMan
{
    public function say()
    {
        echo __CLASS__ . " 我是一个女人 👩 \n";
    }
}
