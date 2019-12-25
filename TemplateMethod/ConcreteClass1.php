<?php

/**
 * ConcreteClass1.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/24
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\TemplateMethod;

class ConcreteClass1 extends AbstractClass
{
    protected function startPlay()
    {
        echo "start play CF\n";
    }
}
