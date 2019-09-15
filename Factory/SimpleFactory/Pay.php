<?php
/**
 * User: lufei
 * Date: 2019/9/15
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\SimpleFactory;

/**
 * Class Pay
 * @package Luffy\DesignPatterns\Factory\SimpleFactory
 */
class Pay
{
    /**
     * 微信支付
     */
    public function weChatPay()
    {
        return new WeChatPay();
    }

    /**
     * 支付宝支付
     */
    public function aliPay()
    {
        return new AliPay();
    }
}
