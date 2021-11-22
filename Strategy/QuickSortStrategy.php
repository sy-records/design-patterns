<?php
/**
 * QuickSortStrategy.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/5/6
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Strategy;

class QuickSortStrategy implements SortStrategy
{
    public function __construct()
    {
        echo __CLASS__ . PHP_EOL;
    }

    public function sort(array $data)
    {
        $count = count($data);
        if ($count <= 1) {
            return $data;
        }
        $index = $data[0];
        $left = [];
        $right = [];
        for ($i = 1; $i < $count; $i++) {
            if ($data[$i] < $index) {
                $left[] = $data[$i];
            } else {
                $right[] = $data[$i];
            }
        }
        $left = self::sort($left);
        $right = self::sort($right);
        return array_merge($left, [$data[0]], $right);
    }
}