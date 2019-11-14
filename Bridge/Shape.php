<?php
/**
 * Shape.php 形状抽象类
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/11
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Bridge;


abstract class Shape
{
    /**
     * @var Color
     */
    protected $color;

    /**
     * Shape constructor.
     *
     * @param Color $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    abstract public function run();
}