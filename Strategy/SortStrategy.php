<?php
/**
 * SortStrategy.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/5/6
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Strategy;

interface SortStrategy
{
    public function sort(array $data);
}