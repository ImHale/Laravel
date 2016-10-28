<?php

  $b = 20;
  function demo(&$a)
  {
      $a = 100;
  }
// &$a = $b
  echo $b."<br>";
  demo($b);
  echo $b."<br>";

function test($name,$age,$email,$sex="male")
{
  echo "{$name}+{$age},{$email}+{$sex}";
}
test("hale",23,"hale@163.com","male");
test("hale",21,"hale@163.com");
 ?>
