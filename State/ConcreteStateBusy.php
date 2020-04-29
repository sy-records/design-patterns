<?php
/**
 * ConcreteStateBusy.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/4/26
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\State;


class ConcreteStateBusy extends State
{
    public function handle(): void
    {
        echo "忙碌状态" . PHP_EOL;
    }

    public function handle1(): void
    {
        echo "忙碌状态" . PHP_EOL;
        echo __CLASS__ . "：处理 request1" . PHP_EOL;
        echo __CLASS__ . "：忙完了... 转回在线状态" . PHP_EOL;
        $this->context->transitionTo(new ConcreteStateOnline());
    }
}