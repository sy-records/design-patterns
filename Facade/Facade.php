<?php

/**
 * Facade
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/11/29
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Facade;

class Facade
{
    /**
     * @var People
     */
    private $people;

    /**
     * @var Package
     */
    private $package;

    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->people = new People();
        $this->package = new Package();
    }

    /**
     * 寄快递
     */
    public function send()
    {
        $this->people->say();
        $this->package->pickup();
        $this->package->inspection();
        $this->package->bale();
        $this->package->sendOut();
    }
}
