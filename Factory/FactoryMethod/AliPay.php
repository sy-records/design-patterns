<?php
/**
 * User: lufei
 * Date: 2019/9/15
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\FactoryMethod;

/**
 * Class AliPay
 * @package Luffy\DesignPatterns\Factory\FactoryMethod
 */
class AliPay implements createPay
{
    public function pay()
    {
        echo "我是AliPay\n";
    }
}
