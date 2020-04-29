<?php
/**
 * QQStateExample.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/4/26
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\State;

class QQStateExample
{
    public static function switch($state = "")
    {
        switch ($state) {
            case "Online":
                echo "正在线上";
                break;
            case "Busy":
                echo "忙碌状态";
                break;
            case "Stealth":
                echo "隐身状态";
                break;
            default:
                echo "不在线";
        }
    }

    public static function if($state = "")
    {
        if ($state == "Online") {
            echo "正在线上";
        } elseif ($state == "Busy") {
            echo "忙碌状态";
        } elseif ($state == "Stealth") {
            echo "隐身状态";
        } else {
            echo "不在线";
        }
    }
}

QQStateExample::switch("Busy");
echo PHP_EOL;
QQStateExample::if("Stealth");