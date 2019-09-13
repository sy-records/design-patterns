<?php
/**
 * User: lufei
 * Date: 2019/9/12
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Singleton;

/**
 * Class MySQLDB
 * @package Luffy\DesignPatterns\Singleton
 */
class MySQLDB
{
    /**
     * 增加私有的静态属性
     * @var
     */
    private static $instance;

    public static function getInstance()
    {
        /**
         * instanceof 用于确定一个 PHP 变量是否属于某一类 class 的实例
         * @link https://www.php.net/manual/zh/language.operators.type.php
         */
        if (!self::$instance instanceof self) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    /**
     * 2. 增加静态公共方法
     */
//  public static function getInstance()
//  {
//      // 返回一个新对象
//      return new self;
//  }

    /**
     * 1. 私有化构造方法 防止使用 new 创建多个实例
     * MySQLDB constructor.
     */
    private function __construct()
    {
    }

    // 4. 私有化__clone魔术方法
    private function __clone()
    {
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}

//$db1 = new MySQLDB();
//$db2 = new MySQLDB();
//var_dump($db1,$db2);

// 如果想得到一个对象，就必须通过类名调用getInstance静态方法
$db1 = MySQLDB::getInstance();
// 反复调用 依旧创建多个对象
$db2 = MySQLDB::getInstance();
var_dump($db1, $db2);

// 通过clone关键字得到一个新的对象空间
//$db3 = clone $db1;
//var_dump($db3);

// 反序列化对象
$db4 = unserialize(serialize($db1));
var_dump($db4);
