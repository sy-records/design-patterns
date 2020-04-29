<?php
/**
 * Context.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/4/26
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\State;


class Context
{
    /**
     * @var State
     */
    private $state;

    /**
     * Context constructor.
     * @param State $state
     */
    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * 允许在运行时更改State对象
     */
    public function transitionTo(State $state): void
    {
        echo __CLASS__ . "：Transition to " . get_class($state) . PHP_EOL;
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request(): void
    {
        $this->state->handle();
    }

    public function request1(): void
    {
        $this->state->handle1();
    }
}