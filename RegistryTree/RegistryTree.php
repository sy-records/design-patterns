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
    private static $objects;

    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function get($alias)
    {
        if (!isset(self::$objects[$alias])) {
            return false;
        }
        return self::$objects[$alias];
    }

    public static function _unset($alias)
    {
		if(isset(self::$objects[$alias])){
			unset(self::$objects[$alias]);
			return true;
		}
		return false;
    }
}
