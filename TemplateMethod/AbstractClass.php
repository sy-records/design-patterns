<?php

/**
 * AbstractClass.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/24
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\TemplateMethod;

abstract class AbstractClass
{
    final public function templateMethod()
    {
        $this->open();
        $this->startPlay();
        $this->endPlay();
    }

    protected function open()
    {
        echo "open game\n";
    }

    abstract protected function startPlay();

    protected function endPlay()
    {
        echo "end game\n";
    }
}
