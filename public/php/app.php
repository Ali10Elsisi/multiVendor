<?php 
// namespace A;
// include  __DIR__ . ('/A/Person.php');
// include  __DIR__ . ('/B/Person.php');
use A\Person;
include __DIR__ ."/autoload.php";

$person = new Person();
$sc = new ServiceContainer;




exit;
// use app\php\Person;
$person1 = new A\Person ('ali',10,'male');
var_dump($person1);
echo '<br>';

if($person1 instanceof A\Person )
{
    echo "yes<br>";
}

$person2 = new B\Person('ibrahim',50,'female');
var_dump($person2);
echo '<br>';




$person1::$country = "palestine";
A\Person::$country = 'egypt';

$person1->setAge(10);

//  echo B\Person::$country ;

//  echo $person1::$country;
?> 