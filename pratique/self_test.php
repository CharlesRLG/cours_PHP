<?php

# Exemple utilisation self

class MyClass {
    const CONST_VALUE = 'Une valeur constante';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;
echo "<br>";
echo MyClass::CONST_VALUE;
echo "<br>";
echo "<br>";

class OtherClass extends MyClass
{
    public static $my_static = 'variable statique';

    public static function doubleColon() {
        echo __FUNCTION__ . "<br>";
        echo parent::CONST_VALUE . "\n"; echo "<br>";
        echo self::$my_static . "\n"; echo "<br>";
        echo static::$my_static . "\n"; echo "<br>";
        echo __FUNCTION__ . " FIN<br>";
    }
}

class ThirdClass extends OtherClass {
    public static $my_static = 'variable statique ThirdClass';

    
}

$classname = 'OtherClass';
$classname::doubleColon();

echo OtherClass::doubleColon();
echo "<br>";


echo ThirdClass::doubleColon();
echo "<br>";