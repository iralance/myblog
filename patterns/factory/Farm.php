<?php
namespace factory;

class Farm implements Factory
{
    public function __construct()
    {
        echo "初始化了一个农场~ \n";
    }

    public function produce($type='')
    {
        switch ($type) {
            case 'chicken':
                return new Chicken();
            case 'pig':
                return new Pig();
            default:
                echo "该农场不支持生产该农物~ \n";
        }
    }
}