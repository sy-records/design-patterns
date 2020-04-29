<?php
/**
 * ConcreteStateOnline.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/4/26
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\State;


class ConcreteStateOnline extends State
{
    public function handle(): void
    {
        echo "正在线上" . PHP_EOL;
        echo __CLASS__ . "：处理 request" . PHP_EOL;
        echo __CLASS__ . "：有些事情，要去忙了..." . PHP_EOL;
        $this->context->transitionTo(new ConcreteStateBusy());
    }

    public function handle1(): void
    {
        echo "正在线上" . PHP_EOL;
    }
}