<?php
//工厂模式

spl_autoload_register('autoload');

function autoload($class)
{
    require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use factory\Farm;
use factory\SampleFactory;

//工厂模式
$farm = new Farm();
$farm->produce('chicken');
$farm->produce('pig');

//工厂方法模式退化为简单工厂模式
SampleFactory::produce("chicken");
SampleFactory::produce("pig");