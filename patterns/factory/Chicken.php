<?php
namespace Factory;

class Chicken implements AnimalInterface
{
    public function __construct()
    {
        echo "生成了一直鸡~ \n";
    }
}