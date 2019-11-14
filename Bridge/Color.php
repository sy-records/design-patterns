<?php
/**
 * Color.php 颜色抽象类
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/11
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Bridge;


abstract class Color
{
    abstract public function output();
}