<?php
/**
 * Client.php
 *
 * @package   sy-records/design-patterns
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/22
 * @copyright Swoole, Inc.
 */

namespace Luffy\DesignPatterns\Composite\Safe;

require __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $composite = new Dir("Composite");
        $safe = new Dir("Safe");

        $composite->add($safe);

        $componentFile = new File("Component.php");
        $dirFile = new File("Dir.php");
        $fileFile = new File("File.php");
        $clientFile = new File("Client.php");

        $safe->add($componentFile);
        $safe->add($dirFile);
        $safe->add($fileFile);
        $safe->add($clientFile);

        echo $composite->getName();
    }
}

Client::run();