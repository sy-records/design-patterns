<?php
/**
 * Dir.php
 *
 * @package   sy-records/design-patterns
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/22
 * @copyright Swoole, Inc.
 */

namespace Luffy\DesignPatterns\Composite\Safe;


class Dir extends Component
{
    /**
     * @var array
     */
    protected $children = [];

    /**
     * @param Component $component
     */
    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    public function getName()
    {
        $nameStr = $this->name ."\n";
        foreach ($this->children as $k => $v) {
            $nameStr .= "--" . $v->getName();
        }
        return $nameStr; 
    }
}