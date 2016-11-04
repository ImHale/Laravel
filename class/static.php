<?php

  class Person
  {
      public $name;
      public $age;
      public $sex;
      public static $str="Hello";

      function __construct($name,$age,$sex)
      {
        $this -> name = $name;
        $this -> age = $age;
        $this -> sex = $sex;

      }

      public static function say()
      {
        // echo "{$this-> name},{$this->age},{$this->sex} ".Person::$str ."<br>";
        // echo self::$str;
        echo "Hello World";
      }
  }

  // $bro = new Person("Hale",21,"Man");
  // echo $bro -> name;
  // echo $bro -> str;

  // echo Person::$str = "Hello world";
  // echo Person::$str;
  Person::say();

  // $demo = new Person("Mike",21,"Man");
  // $demo -> say();

 ?>
