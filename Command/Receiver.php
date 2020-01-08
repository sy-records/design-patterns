<?php

/**
 * Receiver.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/1/7
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Command;

class Receiver
{
    public function action()
    {
        echo "执行操作";
    }
}
