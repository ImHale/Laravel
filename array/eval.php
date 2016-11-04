<?php

  $arr = array("name" => "Hale","age" => 21,"sex" => "男");

  var_dump($arr);

  echo "<hr>";

  var_export($arr);

  echo "<hr>";

  $var = var_export($arr,true);

  var_dump($var);

  echo "<hr>";

  $eval = eval('$val='. var_export($arr,true).";");

  var_dump($val);

  echo "<hr>";

  class Person
  {
    public $name;
    public $age;
    public $sex;

    // public $crr = array("aaa","bbb","ccc","ddd","www");

    function __construct($name,$age,$sex)
    {
      $this-> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
    }

    static function __set_state($drr)
    {
      $per = new Person("Hale",22,"Man");

      $per ->name= $drr["name"];
      $per ->age = $drr["age"];

      return $per;
    }

  }

  $per = new Person("吕布",21,"男");
  $per ->name = "Mike";
  $per ->age = 23;

  var_dump($per);
  echo "<hr>";

  var_export($per);
  echo "<hr>";

  $che = eval('$demo = '. var_export($per,true).";");
  var_dump($demo);
 ?>
