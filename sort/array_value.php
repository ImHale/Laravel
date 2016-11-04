<?php
  $arr = ['one','two',"three","four"];

  unset($arr[2]);

  $arr = array_values($arr);
  print_r($arr);


 ?>
