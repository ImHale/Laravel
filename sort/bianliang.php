<?php

  function bianliang($a,$b)
  {
    return $a * $b;
  }
  $bian = "bianliang";
  echo $bian(12,21);


  echo "<hr>";

  function one($d,$e,$f,$j)
  {
      return $d + $e;
  }

  function two($f,$j,$d,$e)
  {
    return $f*$d + $j*$e;
  }
  function three($d,$j){
    return $d + $j;
  }
  $result_b = "one";
  $result_b = "two";
  $result_b = "three";

  // echo $result_b(2,1);
  echo $result_b(1,1,1,2);

 ?>
