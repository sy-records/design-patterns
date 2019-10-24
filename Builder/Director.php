<?php
/**
 * 导演者(Director)角色
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/9/23
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */


namespace Luffy\DesignPatterns\Builder;

class Director
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function build()
    {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
        $this->builder->buildPartC();
        $this->builder->buildOthers();
        return $this->builder->getCar();
    }
}
