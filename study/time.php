<?php

  echo time() - 60*60*24*7 ."<br>";
  $t = time();

  echo date("Y-m-d H:i:s")."<br>";
  echo date("Y年m月d日 H:i:s",$t);

  echo "<hr>";

  $y = 1992;
  $m = 6;
  $d = 17;

  $t = mktime(0,0,0,$m,$d,$y);

  $dtime = time();

  echo ($dtime -$t)/60/60/24;
  echo "<hr>";

  $a = "2016-11-7 12:10:11";

  echo strtotime($a);

 ?>
