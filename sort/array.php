<?php
  function demo()
  {
    return array('one','two',"three");
  }
  echo demo()['0'];

  echo "<br>";

  $var = demo();
  echo $var['2'];

 ?>

<?php
  $arr = array();
  for ($a=0; $a <100 ; $a++) {
    $arr[] = $a * $a;
  }

  echo "<pre>";
  print_r($arr);
  echo "</pre>";

 ?>

<?php

  $arr = array("one" => "Hello",123 => 123);
  print_r($arr);
 ?>

<?php
  $arr = ['one' => 'Hello',123 => 123];

 ?>

<?php

  // $arr = array();

  $arr_a[0] = 1;
  $arr_a[1] = 2;
  $arr_a[2] = 3;
  $arr_a[3.8] = 4;
  $arr_a[true] = 5;
  $arr_a[false] = 6;

  print_r($arr_a);

  echo "数组<br>";

  $arr_a['one'] = 1;
  $arr_b['two'] = 2;
  $arr_b['three'] = 3;
  $arr_b['four'] = 4;
  $arr_b[true] = 5;
  $arr_b[false] = 6;


  print_r($arr_b);

 ?>
