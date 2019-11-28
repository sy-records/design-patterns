<?php
/**
 * Component.php
 *
 * @package   sy-records/design-patterns
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/22
 * @copyright Swoole, Inc.
 */

namespace Luffy\DesignPatterns\Composite\Safe;


abstract class Component
{
    /**
     * @var
     */
    protected $name;

    /**
     * Component constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    abstract public function getName();
}