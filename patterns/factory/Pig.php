<?php
namespace Factory;

class Pig implements AnimalInterface
{
    public function __construct()
    {
        echo "生产了一只猪~ \n";
    }
}