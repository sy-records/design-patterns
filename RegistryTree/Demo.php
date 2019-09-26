<?php
/**
 * 注册树测试文件
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/9/20
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

include __DIR__ . '/../vendor/autoload.php';

// 注册树
use Luffy\DesignPatterns\RegistryTree\RegistryTree;

class Demo
{
    public function index()
    {
        echo "红红火火恍恍惚惚\n";
    }
}

$demo = new Demo();
var_dump($demo);
$demo->index();

RegistryTree::set("demo", $demo);
$demo_obj = RegistryTree::get("demo");
var_dump($demo_obj);
$demo_obj->index();

RegistryTree::_unset('demo');
$demo_obj_two = RegistryTree::get('demo');
$demo_obj_two->index();
