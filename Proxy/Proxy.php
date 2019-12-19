<?php

/**
 * Proxy.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/16
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Proxy;

class Proxy
{
    /**
     * @var RealSubject
     */
    protected $realSubject;

    /**
     * Proxy constructor.
     */
    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }

    public function __call($name, $arguments)
    {
        return $this->realSubject->{$name}(...$arguments);
    }

//    public function get()
//    {
//        $this->realSubject->get();
//    }

    public function send()
    {
        echo  __CLASS__ . " send\n";
    }
}
