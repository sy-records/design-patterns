<?php
/**
 * 适配器类
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/1
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Adapter\ObjectAdapter;


class DatabaseAdapter implements DatabaseTarget
{
    protected $adaptee;

    public function __construct(DatabaseAdaptee $adaptee)
    {
        $this->adaptee = $adaptee;
        $adaptee->driver = "mysqli";
    }

    public function set()
    {
        echo "use {$this->adaptee->driver}.\n";
    }

    public function get()
    {
        echo "used {$this->adaptee->driver}.\n";
    }
}