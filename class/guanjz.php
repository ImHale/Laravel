<?php

  class Person
  {

    function __construct()
    {

    }
    function say()
    {

    }
    function eat()
    {

    }
  }

  // final 用来修饰 类 和 方法 修饰完为最终类

  final class man extends Person
  {

  }

  class woman
  {

  }


$m = new man();

// instanceof 返回的是boolean 型,用来判断s是不是属于父类.

if($m  instanceof Person)
{
  echo "Yes";
}
else
{
  echo "No";
}

$w = new woman();

 ?>
