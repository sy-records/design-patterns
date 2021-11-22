<?php
/**
 * BubbleSortStrategy.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/5/6
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Strategy;

class BubbleSortStrategy implements SortStrategy
{
    public function __construct()
    {
        echo __CLASS__ . PHP_EOL;
    }

    public function sort(array $data)
    {

        $count = count($data);
        for ($i = 1; $i < $count; $i++) {
            for ($j = 0; $j < $count - $i; $j++) {
                if ($data[$j] > $data[$j + 1]) {
                    $temp = $data[$j];
                    $data[$j] = $data[$j + 1];
                    $data[$j + 1] = $temp;
                }
            }
        }
        return $data;
    }
}