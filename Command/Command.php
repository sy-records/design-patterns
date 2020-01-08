<?php

/**
 * Command.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/1/7
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Command;

class Command implements CommandInterface
{
    /**
     * @var Receiver
     */
    protected $receiver;

    /**
     * Command constructor.
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->action();
    }
}
