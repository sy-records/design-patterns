<?php
/**
 * 接口
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/1
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Adapter\ObjectAdapter;


interface DatabaseTarget
{
    public function set();

    public function get();
}