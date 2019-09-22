<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\AbstractFactory;

/**
 * 工厂接口
 * Interface Factory
 * @package Luffy\DesignPatterns\Factory\AbstractFactory
 */
interface Factory
{
    /**
     * @return mixed
     */
    public function createHuMan();

	/**
	 * @return mixed
	 */
	public function createMonkey();
}
