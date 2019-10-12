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
    protected $wheel;
    protected $engine;
    protected $others;

    public function setWheel()
    {
        $this->wheel = "轮子";
        return $this;
    }

    public function setEngine()
    {
        $this->engine = "发动机";
		return $this;
    }

    public function setOthers()
    {
        $this->others = "其他零件";
		return $this;
    }

    public function getCar()
    {
        echo "这辆车由：".$this->wheel.','.$this->engine.',和'.$this->others."组成\n";
        return $this;
    }
}
