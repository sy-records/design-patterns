<?php
/**
 * 不用设计模式时
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/9/19
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

class WeChatPay
{
    public function pay()
    {

    }
}

class AliPay
{
    public function pay()
    {

    }
}

$we = new WeChatPay();
$we->pay();

$ali = new AliPay();
$ali->pay();

