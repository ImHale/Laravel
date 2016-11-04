<?php
  $arr = array("one","2","3","three");

  var_dump(array_rand($arr,3));

  echo "<hr>";

  $aaa = array(1,2,3,4,5,6);
  shuffle($aaa);
  print_r($aaa);

  echo "<hr>";

  $bb = array(1,2,3,4,5,6,8,9);
  echo array_sum($bb);

  echo "<hr>";

  $arr = range(0,10,3);
  print_r($arr);

  echo "<hr>";

  $fill = array_fill(1,9,"Hello");
  print_r($fill);
  echo "<br>";

 ?>
