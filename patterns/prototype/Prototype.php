<?php
namespace prototype;

class Prototype extends PrototypeAbstract
{
    /**
     * Prototype constructor.
     * @param string $name
     */
    public function __construct($name='')
    {
        $this->_name = $name;
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function __set($name='', $value='')
    {
        $this->$name = $value;
    }

    /**
     * 打印对象名称
     *
     * @return sting
     */
    public function getName()
    {
        echo '我是对象' . $this->_name . " \n\n";
    }

    /**
     * 获取原型对象
     *
     * @return object
     */
    public function getPrototype()
    {
        return clone $this;
    }

}