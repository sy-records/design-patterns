<?php
/**
 * 注册树模式
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/9/20
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\RegistryTree;

/**
 * Class RegistryTree
 * @package Luffy\DesignPatterns\RegistryTree
 */
class RegistryTree
{
	public static $objects;

	public static function set($alias, $object)
	{
		self::$objects[$alias] = $object;
	}

	public static function get($alias)
	{
		if (isset(self::$objects[$alias])) {
			return self::$objects[$alias];
		} else {
			echo "该对象实例不存在。\n";
		}
	}

	public static function _unset($alias)
	{
		unset(self::$objects[$alias]);
	}
}
