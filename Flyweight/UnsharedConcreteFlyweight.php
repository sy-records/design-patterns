<?php

/**
 * UnsharedConcreteFlyweight.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/9
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Flyweight;

class UnsharedConcreteFlyweight extends Flyweight
{
    /**
     * @param $content
     */
    public function get($content)
    {
        echo "不共享的：{$content} {$this->name}\n";
    }

    public function del()
    {
        $this->name = '';
    }
}
