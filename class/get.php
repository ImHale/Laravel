<?php

  class Person
  {
    private $name;
    private $age;
    private $sex;

    function __construct($name,$age,$sex)
    {
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
    }

    function __get($get)
    {
        return $this -> $get;
    }

    function __set($set,$value)
    {
        // echo "{$set} = {$value} <br>";
        $this -> $set = $value;
    }


    function say()
    {
      echo "Name:{$this -> name} | Age:{$this -> age} | Sex:{$this -> sex} <br>";
    }



    function __destruct()
    {
      echo "Good Bye : {$this -> name} <br>";
    }
  }

  $one = new Person("Hale",21,"Man");
  $two = new Person();

  // $one -> name="Mike";
  // $one -> age = 12;
  // $one -> sex = "MAN";
  //
  // echo "<hr>";
  //
  // echo $one -> name ."<br>";
  // echo $one -> age ."<br>";
  // echo $one -> sex ."<br>";
  echo "<hr>";

  echo $one ->__get("age");

 ?>
