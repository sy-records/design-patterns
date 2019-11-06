<?php
/**
 * 适配器类
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/1
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Adapter\ClassAdapter;


class DatabaseAdapter extends DatabaseAdaptee implements DatabaseTarget
{
    public function __construct()
    {
        $this->driver = "pdo";
    }

    public function get()
    {
        echo "used {$this->driver}.\n";
    }
}