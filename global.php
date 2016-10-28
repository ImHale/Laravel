<?php

$name = "Dev";
function demo()
{
  global $name;
  $name = "Hale <br>";
  echo $name, $age;
}
$age = 20;
demo();
 ?>


<?php

  define("name","Hello Define");
  function test()
  {
    echo name."<br>";
  }
  test();

 ?>
