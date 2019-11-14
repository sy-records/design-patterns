<?php
/**
 * Triangle.php 三角形
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/11
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Bridge;


class Triangle extends Shape
{
    public function run()
    {
        echo "{$this->color->output()} 三角形\n";
    }
}