<?php

  class Person
  {
    var $name;
    var $age;
    var $sex;

    function say($name,$age,$sex)
    {
        echo "{$this -> name} + {$this -> age} + {$this -> sex}";
    }

    function __toString()
    {
      // echo $this->name;
      return "Hello World !";
    }

  }
  $ren = new Person();
  echo $ren;

  // $ali = new Person("Ali",23,"Man");
  //
  // $ali -> say();

 ?>
