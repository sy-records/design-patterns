<?php
/**
 * 产品(Product)角色
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/9/23
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */


namespace Luffy\DesignPatterns\Builder;

class Car
{
    /**
     * @var array
     */
    protected $_parts = [];

    public function setPartA()
    {
        $this->_parts[] = "发动机、";
        return $this;
    }

    public function setPartB()
    {
        $this->_parts[] = "底盘、";
        return $this;
    }

    public function setPartC()
    {
        $this->_parts[] = "变速箱、";
        return $this;
    }

    public function setOthers()
    {
        $this->_parts[] ="其他零件";
        return $this;
    }

    public function getCar()
    {
        $str = "这辆车由：";
        foreach ($this->_parts as $item) {
        	$str .= $item;
		}
        $str .= "组成\n";
        echo $str;
    }
}
