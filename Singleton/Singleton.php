<?php
/**
 * User: lufei
 * Date: 2019/9/12
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Singleton;

/**
 * Class Singleton
 * @package Luffy\DesignPatterns\Singleton
 */
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
