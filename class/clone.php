<?php

  class Person
  {
      var $name;
      var $age;
      var $sex;

      function __construct($name,$age,$sex)
      {
        $this -> name = $name;
        $this -> age = $age;
        $this -> sex = $sex;
      }

      function say()
      {
        echo "Say Name {$this -> name},{$this -> age},{$this -> sex}  <hr>";
      }

      // function __clone()
      // {
      //   $this -> name = "Clone Name";
      //   $this -> age = 12;
      // }

      function __call($method,$values) // 第一个参数为:方法名 第二个参数为:数组或者其他的值.
      {
        echo "Sorry, 方法名{$method}(). 参数为: <br>";
        print_r($values);
        echo "不存在! <br>";
      }

      function __sleep()
      {
        // echo "Diao Yong Chuan Xing Huan";
        echo "串行化自动调用方法";
        return array("name","sex");
      }

      function __wakeup()
      {
          echo "反串行化时自动调用方法";
          return $this -> age = 12;
        // return array($name,$sex);
      }

      function __destruct()
      {
        echo "Bye <br>";
      }

  }

  // $a = new Person("Hale",21,"man");
  // $a -> say();
  // $a -> run("跑步","散步","睡觉");
  // $a -> eat("吃饭","打斗逗","写代码");

  // $b = clone($a);
  // $b -> say();


 ?>
