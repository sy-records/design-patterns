<?php
/**
 * Tea.php
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/15
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Decorator;


class Tea implements Drinks
{
    public function name()
    {
        return '茶';
    }

    public function price()
    {
        return 10;
    }
}
