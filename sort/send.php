<?php


  setcookie("name","hale",time()+3600,"/");

  print_r($_COOKIE);

  echo "<br>";

  session_start();

  $_SESSION["name"] = "Hale";

  print_r($_SESSION);

  echo "<br>";

  echo "<pre>";
  print_r($GLOBALS);
  echo "</pre>";
 ?>
