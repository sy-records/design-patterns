<?php
/**
 * YellowColor.php 黄色
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/11
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Bridge;


class YellowColor extends Color
{
    public function output()
    {
        return "黄色";
    }
}