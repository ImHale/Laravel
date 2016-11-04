<!-- <?php

  function demo()
  {

    $func = function($str)
    {
      echo $str ."<br>";
    };

    return $func;
  }

  $var = demo();
  $var("Hello ");
 ?> -->

<?php

  function callFunc($func)
  {
    $func("Some String");
  }
  $printStrFunc = function($str)
  {
    echo $str ."<br>";
  };
  callFunc($printStrFunc);
  callFunc(function($str){
    echo $str ."<br>";
  });


 ?>

<?php

  function getMoney()
  {
    $rmb = 1;
    $func = function() use (&$rmb)
    {
        echo $rmb ."<br>";
        $rmb++;
    };
    $func();
    echo $rmb;

  }

  getMoney();

 ?>
