<?php

function sta()
{
  static $a = 0;
  $a++;
  echo $a."<br>";
}

echo "<br>";


function demo()
{
  static $a = 0;
  $a++;
  echo $a."<br>";
}
  sta();
  sta();
  demo();
echo "<hr>";

function test()
{
  static $d = 0;
  $d++;
  echo $d;
}
test();

 ?>
