<?php

/**
 * FlyweightFactory.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/9
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Flyweight;

class FlyweightFactory
{
    /**
     * @var array
     */
    private $flyweights = [];

    /**
     * @param $name
     * @return mixed
     */
    public function getFlyweight($name)
    {
        if (!isset($this->flyweights[$name])) {
            $this->flyweights[$name] = new ConcreteFlyweight($name);
        }
        return $this->flyweights[$name];
    }
}
