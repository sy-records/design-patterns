<?php
/**
 * Drinks.php
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/15
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Decorator;


interface Drinks
{
    public function name();

    public function price();
}
