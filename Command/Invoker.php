<?php

/**
 * Invoker.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/1/7
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Command;

class Invoker
{
    /**
     * @var Command
     */
    protected $command;

    /**
     * @param Command $command
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function executeCommand()
    {
        $this->command->execute();
    }
}
