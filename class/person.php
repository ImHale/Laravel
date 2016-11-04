<?php
    // 封装

    class Person
    {
      // 属性
      private $name;
      private $age;
      private $sex;

      function __construct($name,$age,$sex)
      {
        $this -> name = $name;
        $this -> age = $age;
        $this -> sex = $sex;
      }

      function __get($pro)
      {
        return $this -> $pro;
      }

      function say()
      {
        echo "我的姓名为:{$this -> name},我的年龄为:{$this -> age},我的性别为: {$this -> sex} <br>";
      }
      function eat()
      {
        echo "我的年龄为:{$this -> age},我的姓名为:{$this -> name},我的性别为:{$this -> sex} <br>";
      }

      function __destruct()
      {
        echo "Good Bye :{$this -> name} <br>";
      }

    }

    $one = new Person("Mike",23,"男");
    $two = new Person("Sheri",21,"女");

    $one -> say();
    $two -> say();
    // $two -> eat();


 ?>
