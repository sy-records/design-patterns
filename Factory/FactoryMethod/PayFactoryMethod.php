<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\SimpleFactory;

/**
 * 创建支付方法类 此处是将对象的创建抽象成一个接口
 * Interface PayFactoryMethod
 * @package Luffy\DesignPatterns\Factory\SimpleFactory
 */
interface PayFactoryMethod
{
	public function create();
}