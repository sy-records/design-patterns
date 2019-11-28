<?php
/**
 * Client.php
 *
 * @package   sy-records/design-patterns
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/22
 * @copyright Swoole, Inc.
 */

namespace Luffy\DesignPatterns\Composite\Transparent;

require __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $composite = new Dir("Composite");
        $transparent = new Dir("Transparent");

        $composite->add($transparent);

        $componentFile = new File("Component.php");
        $dirFile = new File("Dir.php");
        $fileFile = new File("File.php");
        $clientFile = new File("Client.php");

        $transparent->add($componentFile);
        $transparent->add($dirFile);
        $transparent->add($fileFile);
        $transparent->add($clientFile);

        $testFile = new File("test.php");
        $clientFile->add($testFile);

        echo $composite->getName();
    }
}

Client::run();