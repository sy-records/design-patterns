<?php

/**
 * Subject.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/16
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Proxy;

interface Subject
{
    public function get();

    public function put();
}
