<?php

  $zhan = array();

  array_push($zhan, 1);
  array_push($zhan, 2);
  array_push($zhan, 3);
  array_push($zhan, 4);
  array_push($zhan, 5,6,7,8,9);

  echo array_pop($zhan)."<br>";
  echo array_pop($zhan)."<br>";
  echo array_pop($zhan)."<br>";
  echo "<br>";
  print_r($zhan);
  echo "<br>";

  echo "<hr>";
  $dl = array();

  array_unshift($dl,1);
  array_unshift($dl,2);
  array_unshift($dl,3);
  array_unshift($dl,4,5,6);

  echo array_pop($dl);
  echo "<br>";
  echo array_shift($dl);
  echo "<br>";

  print_r($dl);

 ?>
