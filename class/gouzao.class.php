<?php
  class GouZao
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

    // 构造方法
    // function GouZao($name,$age,$sex="男")
    // {
    //   $this -> name = $name;
    //   $this -> age = $age;
    //   $this -> sex = $sex;
    // }


    function Run()
    {
        echo "{$this -> name} 在跑步 <br>";
    }

    function Work()
    {
        echo "{$this -> name} 在工作 <br>";
    }

    // 析构方法
    function __destruct()
    {
        echo "{$this -> name} GooD <br>";
        // 释放的时候遵循 先进后出
    }

  }

    $ask = new GouZao("Hale",21,"男");
    $fun = new GouZao("Mike",23);

    $ask -> Run();
    $fun -> Work();

    // $ask = null;
 ?>
