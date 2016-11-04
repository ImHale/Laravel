<?php

  function demo($a,$b)
  {
    $demo = $a + $b;
    echo "Hello function . {$demo} <br>";
    return $a * $b;
  }

  $var = "demo";
  echo $var(12,21)."<br>";

  $var = function($a,$b)
  {
    return $a*$b;
    echo "Hello Anymouse ";
  };
  $var = "demo";
  echo $var(5,7);
 ?>
