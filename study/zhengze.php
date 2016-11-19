<?php

  // $str = "Hello World";

  // print_r(explode(" ",$str,3));

  $num = 0;

  $str = "http://www.baidu/php/demo.php";

  $replace = str_replace("php","hale",$str,$num);

  echo $str ."<br>";
  echo $replace."<br>";
  echo $num;

 ?>
