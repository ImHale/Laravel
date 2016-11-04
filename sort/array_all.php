<?php

  // 各种数组的功能
  // $arr = ["name" => "Hale","age" => 18,"sex" => "Man"];
  //
  // $demo = ['a','b','c','d','e','f'];
  //
  // echo "<pre>";
  // // print_r(array_chunk($demo,3));
  // // print_r(array_chunk($arr,3));
  // // print_r(array_reverse($arr));
  // // print_r(array_flip($arr));
  // print_r(array_unique($arr));
  // echo "</pre>";

  // 过滤
  // $arr = array(1,2,3,4,5,6,7,8,9,-1,-2,-3,-4,-5,-6,-7,-8,9,10,false,null,"");
  //
  // // echo "<pre>";
  // var_dump($arr);
  // // echo "</pre> <br>";
  // echo "<hr>";
  //
  // var_dump(array_filter($arr));
  // echo "<hr>";
  //
  // function myFunc($values)
  // {
  //   if($values >= 0)
  //       return true;
  //   else
  //       return false;
  // }
  // var_dump(array_filter($arr,"myFunc"));
  // echo "<hr>";
  //
  // var_dump( array_values( array_filter($arr,function($value)
  // {
  //     return !($value%2==0);
  // })) );


  // $arr = array("one" => 1,"two" => 2, "three" => 3,"four" => 4);
  //
  // print_r($arr);
  // echo "<br>";
  //
  // array_walk($arr,function($key, $value,$str){
  //     echo "{$key} {$value} {$str} <br>";
  // }, "######" );
  //
  // echo "<pre>";
  // print_r($arr);
  // echo "</pre>";
  // echo "<br>";

  $arr = array(1,2,3,4,5,6);
  $brr = array("one","two","three","four","five","six");

  print_r($arr)."<br>";
  echo "<br>";
  print_r($brr)."<br>";
  echo "<br>";

  function myFunc($a,$b){
      // return $a*$a;
      echo "$a --- $b <br>";
      return $b;
  }

  $var =  array_map("myFunc", $arr,$brr);
  echo "<pre>";
  print_r($var);
  echo "<br>";
  echo "</pre>";

 ?>
