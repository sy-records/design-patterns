<?php
/**
 * Client.php
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/11
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Bridge;

require __DIR__ . '/../vendor/autoload.php';

class Client
{
    public function run()
    {
        $red = new RedColor();
        $yellow = new YellowColor();
        $green = new GreenColor();

        // 红色的正方形
        $redSquare = new Square($red);
        $redSquare->run();

        // 黄色的正方形
        $yellowSquare = new Square($yellow);
        $yellowSquare->run();

        // 绿色的正方形
        $greenSquare = new Square($green);
        $greenSquare->run();

        // 红色的三角形
        $redTriangle = new Triangle($red);
        $redTriangle->run();

        // 黄色的三角形
        $yellowTriangle = new Triangle($yellow);
        $yellowTriangle->run();

        // 绿色的三角形
        $greenTriangle = new Triangle($green);
        $greenTriangle->run();

        // 红色的圆形
        $redCircle = new Circle($red);
        $redCircle->run();

        // 黄色的圆形
        $yellowCircle = new Circle($yellow);
        $yellowCircle->run();

        // 绿色的圆形
        $greenCircle = new Circle($green);
        $greenCircle->run();
    }
}

$client = new Client();
$client->run();