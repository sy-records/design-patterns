<?php
/**
 * 适配者类
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/1
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Adapter\ClassAdapter;


class DatabaseAdaptee
{
    protected $driver = "mysql";

    public function set()
    {
        echo "use {$this->driver}.\n";
    }
}
