<?php
/**
 * File.php
 *
 * @package   sy-records/design-patterns
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/22
 * @copyright Swoole, Inc.
 */

namespace Luffy\DesignPatterns\Composite\Safe;


class File extends Component
{
    /**
     * @return string
     */
    public function getName()
    {
        return "--" . $this->name . "\n";
    }
}