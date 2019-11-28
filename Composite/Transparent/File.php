<?php
/**
 * File.php
 *
 * @package   sy-records/design-patterns
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/22
 * @copyright Swoole, Inc.
 */

namespace Luffy\DesignPatterns\Composite\Transparent;


class File extends Component
{
    /**
     * @param  Component $component
     * @throws \Exception
     */
    public function add(Component $component)
    {
        throw new \Exception("文件不能添加子节点");
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "--" . $this->name . "\n";
    }
}