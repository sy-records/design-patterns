<?php
/**
 * Circle.php 圆形
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/11
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Bridge;


class Circle extends Shape
{
    public function run()
    {
        echo "{$this->color->output()} 圆形\n";
    }
}