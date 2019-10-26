<?php
/**
 * 原型模式
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/10/24
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Prototype;


interface Prototype
{
	public function __clone();
}