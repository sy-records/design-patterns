<?php
/**
 * 注册树测试文件
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/9/20
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
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

class Demo
{
    public function index()
    {
        echo "红红火火恍恍惚惚\n";
    }
}

$demo = new Demo();
var_dump($demo);
$demo->index();

RegistryTree::set("demo", $demo);
$demo_obj = RegistryTree::get("demo");
var_dump($demo_obj);
$demo_obj->index();

RegistryTree::_unset('demo');
$demo_obj_two = RegistryTree::get('demo');
$demo_obj_two->index();