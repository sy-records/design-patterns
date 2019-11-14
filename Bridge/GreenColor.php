<?php
/**
 * GreenColor.php 绿色
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/11
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Bridge;


class GreenColor extends Color
{
    public function output()
    {
        return "绿色";
    }
}