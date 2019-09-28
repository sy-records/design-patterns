<?php
/**
 * User: lufei
 * Date: 2019/9/19
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\OptimizeAbstractFactory;

use ReflectionClass;
use ReflectionException;

class FactoryWithReflection
{
    /**
     * @var mixed|string
     */
    public $create = "Man";

    /**
     * FactoryWithReflection constructor.
     */
    public function __construct()
    {
        $config = include 'config1.php';
        $this->create = $config['create'];
    }

    /**
     * @return mixed
     */
    public function createHuMan()
    {
        $className = __NAMESPACE__ .'\\'. $this->create;
        try {
            $class = new ReflectionClass($className);
            $human = $class->newInstance();
        } catch (ReflectionException $Exception) {
            throw new \InvalidArgumentException($Exception->getMessage());
        }
        return $human;
    }

    /**
     * @return mixed
     */
    public function createMonkey()
    {
        $className = __NAMESPACE__ .'\\'. $this->create . "Monkey";
        try {
            $class = new ReflectionClass($className);
            $monkey = $class->newInstance();
        } catch (ReflectionException $Exception) {
            throw new \InvalidArgumentException($Exception->getMessage());
        }
        return $monkey;
    }
}
