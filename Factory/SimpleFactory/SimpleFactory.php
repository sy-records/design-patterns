<?php
/**
 * User: lufei
 * Date: 2019/9/15
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\SimpleFactory;

/**
 * Class SimpleFactory
 * @package Luffy\DesignPatterns\Factory\SimpleFactory
 */
class SimpleFactory
{
    public function pay($operate)
    {
        switch ($operate) {
            case 'WeChatPay':
                $result = new WeChatPay();
                break;
            case 'AliPay':
                $result = new AliPay();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的支付方式');
        }
        return $result;
    }
}
