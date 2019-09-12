<?php
/**
 * User: lufei
 * Date: 2019/9/12
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Singleton;


class Test
{
	public static $instance;

	public static function getInstance()
	{
		if (!self::$instance instanceof self) {
			static::$instance = new self();
		}

		return static::$instance;
	}

	public function __construct()
	{
	}

	public function __clone()
	{
	}

	public function __wakeup()
	{
	}

}
$test1 = new Test();
$test2 = new Test();
$test3 = clone $test2;
$test4 = Test::getInstance();
$test5 = unserialize(serialize($test4));
var_dump($test1,$test2,$test3,$test4,$test5);

class Singleton
{
	/**
	 * @var
	 */
	private static $instance;

	public static function getInstance()
	{
		if (!self::$instance instanceof self) {
			static::$instance = new self();
		}

		return static::$instance;
	}

	/**
	 * MySQLDB constructor.
	 */
	private function __construct()
	{

	}

	private function __clone()
	{

	}

	private function __wakeup()
	{
		// TODO: Implement __wakeup() method.
	}
}

$test6 = Singleton::getInstance();
$test7 = Singleton::getInstance();

var_dump($test6,$test7);