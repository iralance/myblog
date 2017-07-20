<?php
namespace singleton;

/**
 * Class Singleton
 * @package 单例
 */

class Singleton
{
    private static $_instance;

    public function __construct()
    {
    }

    /**
     * 禁止clone对象
     */
    public function __clone()
    {
        die('clone is forbidden');
    }

    /**
     * @return 获取实例
     */
    public static function getInstance()
    {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }
        self::$_instance = new self();
        return self::$_instance;
    }

    /**
     * 测试方法
     */
    public function test()
    {
        echo "hello world".PHP_EOL;
    }

}
