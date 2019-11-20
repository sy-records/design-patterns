<?php
/**
 * BlackTea.php 红茶
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/15
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Decorator;


class BlackTea extends Decorator
{
    public function name()
    {
        return '柠檬红'.$this->drinks->name();
    }

    public function price()
    {
        return $this->drinks->price() + 5;
    }
}