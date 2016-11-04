<?php

  $arr = array(12,21,2,3,4,5,6,7,8,9,10,23,32,34,43,45,54,56,65,5,2,1,67,76,78,87,89,98,90,9);

  function qsort($arr)
  {
    if(!is_array($arr) || empty($arr))
        return array();

    $len = count($arr);
    if($len <= 1)
        return $arr;
    $key = $arr[0];

    $left = array();
    $right = array();

    for($i = 1; $i < $len; $i++)
    {
      if($arr[$i] <= $key){
        $left[] = $arr[$i];
      }else {
        $right[] = $arr[$i];
      }
    }
      print_r($left);
      echo "<br>";
      echo $key;
      print_r($right);
      echo "<br>";
  }
  qsort($arr);

  // print_r($arr);
  // echo "<br>";

 ?>
