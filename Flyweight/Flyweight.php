<?php

/**
 * Flyweight.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/9
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Flyweight;

abstract class Flyweight
{
    /**
     * @var
     */
    protected $name;

    /**
     * Flyweight constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $content
     */
    abstract public function get($content);
}
