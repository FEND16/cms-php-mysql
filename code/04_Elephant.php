<?php

class Elephant
{

  private $name;
  public static $age = 50;

  public function __construct($name = 'Hathi')
  {
    $this->name = $name;
  }

  public function getName(){
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public static function sayStuff()
  {
   echo Self::$age;
  }
}

$hathi = new Elephant;
$hathi->setName('Dumbo');
$hathiName = (new Elephant)->sayStuff();
echo $hathiName;

$hathi->getName(); 
Elephant::sayStuff();



?>








<?php
  
  echo "<h1>I am HTML</h1>";

?>
