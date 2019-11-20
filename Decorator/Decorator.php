<?php
/**
 * Decorator.php 装饰器
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/15
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Decorator;


abstract class Decorator implements Drinks
{
    /**
     * @var Drinks
     */
    protected $drinks;

    /**
     * Decorator constructor.
     *
     * @param Drinks $drinks
     */
    public function __construct(Drinks $drinks)
    {
        $this->drinks = $drinks;
    }
}