<?php

/**
 * RealSubject.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/16
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Proxy;

class RealSubject implements Subject
{
    public function get()
    {
        echo __CLASS__ . " get\n";
    }

    public function put()
    {
        echo  __CLASS__ . " put\n";
    }
}
