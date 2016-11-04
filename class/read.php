<?php

  include "clone.php";

  $str = file_get_contents("save.txt");

  $a = unserialize($str);

  $a -> say();

 ?>
