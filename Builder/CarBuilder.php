<?php
/**
 * 具体建造者(CarBuilder)角色
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/9/23
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */


namespace Luffy\DesignPatterns\Builder;

class CarBuilder implements Builder
{
    protected $car;

    public function __construct()
    {
        $this->car = new Car();
    }

	public function buildPartA()
	{
		$this->car->setPartA();
	}

	public function buildPartB()
	{
		$this->car->setPartB();
	}

	public function buildPartC()
	{
		$this->car->setPartC();
	}

	public function buildOthers()
	{
		$this->car->setOthers();
	}

	public function getCar()
	{
		return $this->car;
	}
}
