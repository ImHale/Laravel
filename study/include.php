<?php

  function __autoload($classname)
  {
    echo $classname ."<br>";
    include strtolower($classname).".class.php";

  }

  $on = new One();
  $on -> say();

  $tw = new Two();
  $tw -> say();

  $th = new Three();
  $th -> say();

  Four::say();
  Four::say();
  Four::say();
 ?>
