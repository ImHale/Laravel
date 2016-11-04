<?php

  class Study
  {
    function __invoke($name,$age,$sex)
    {
      echo "Hello World";
    }

    function __call($method,$args)
    {
        if(in_array($method,$this->arr))
        {
          echo $args[1]."<br>";
        }
        else
        {
          echo "您调用的方法{$method}(),不存在! <hr>";
        }
    }

    function __callstatic($method,$args) // 魔术方法 作用: 类调用方法不存在的时候返回错误信息
    {
      echo "您调用的静态方法{$method}() 不存在.(".implode(".",$args).")";
    }

  }

  $hi = new Study("Hale",21,"man");
  // $hi();

  $hi -> say();

  Study::helo(1,2,3);

 ?>
