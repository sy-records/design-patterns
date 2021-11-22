<?php
/**
 * Context.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/5/6
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Strategy;

class Context
{
    private $strategy;

    public function __construct(SortStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(SortStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function sort(array $data)
    {
        return $this->strategy->sort($data);
    }
}