<?php

/**
 * CommandInterface.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/1/7
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Command;

interface CommandInterface
{
    public function execute();
}
