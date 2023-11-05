<?php
use ServiceContainer;

class Facade 
{
    protected $container = 'person';

    public static function __callStatic($name, $arguments)
    {
        $person = ServiceContainer::make(self::$container);
        $person->$name(...$arguments);
    }

}

?>