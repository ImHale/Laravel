<?php
  // $arr = [
  //   "one" = ["name" => "Hale","age" =>23 ,"sex" => "man"];
  //
  //   "two" = ["name" => "Mike","age" =>18 ,"sex" => "woman"]
  // ];


  next();
  prev();
  end();
  reset();


  $arr = ["Name" => "hale","age" => 23,"sex" => "man","name" => "mike"];

  next($arr);
  next($arr);
  end($arr);
  // reset($arr);
  prev($arr);

  echo "Localhost is: ".key($arr)."=>".current($arr)."<br>";

 ?>
