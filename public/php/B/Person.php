<?php
namespace B;
use A\Person as persanA;
 
use Info;

class Person extends persanA implements Human
{
    const LARAVEL = 'laravel b';
    function hello()
    {
        echo "hello B";
    }
    const MALE = 'M' ;
    const FEMALE = 'F';
    public  $name;
    private $age;
    protected $gender;

    public static $country;

    public function __construct($name,$age,$gender)
    {
        $this->name =$name;
        $this->age = $age;
        $this->gender = $gender;
    }



    public static function setCountry($country)
    {
        self::$country = 'palestine';
    }

}

?>