<?php

  class Person
  {
    static $obj = null;

    static function getObj()
    {
      if(is_null(self::$obj))
        self::$obj = new self;
      return self::$obj;
    }

    function __destruct()
    {
      echo "只能输出一次,不管你调用多少次类名和对象.<br>";
    }

  }

  $p = Person::getObj();
  $p = Person::getObj();
  $p = Person::getObj();

  // $demo = new Person();


 ?>
