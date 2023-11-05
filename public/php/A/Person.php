<?php
namespace A;

use B\Human;
use Info;

define('ajyal',true);
class Person implements Human 
{
    use info;
    const LARAVEL = 'laravel a';
    function hello()
    {
        echo "hello A";
    }
    const MALE = 'M' ;
    const FEMALE = 'F';
    public  $name;
    private $age;
    protected $gender;

    public static $country;

    // public function __construct($name,$age,$gender)
    // {
    //     $this->name =$name;
    //     $this->age = $age;
    //     $this->gender = $gender;
    // }


    

    public static function setCountry($country)
    {
        self::$country = 'palestine';
    }
    
    public function Name()
    {
        return $this->name;
    }

    public function Age()
    {
        return $this->age;
    }
}

?>