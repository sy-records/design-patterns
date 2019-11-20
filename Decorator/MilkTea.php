<?php
/**
 * MilkTea.php 奶茶
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/15
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Decorator;


class MilkTea extends Decorator
{
    public function name()
    {
        return '珍珠奶'.$this->drinks->name();
    }

    public function price()
    {
        return $this->drinks->price() + 8;
    }
}