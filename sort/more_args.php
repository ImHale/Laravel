<?php

  function more_args()
  {
    $args = func_get_args();
    for ($i=0; $i <count($args) ; $i++) {
        echo "第".$i."个参数是:".$args[$i]."<br>";
    }
  }

  more_args("Hale",'Male',18,'hale@163.com');

  function more_arg()
  {
    for ($j=0; $j<func_num_args(); $j++) {
      echo " ".$j."".func_get_arg($j)."<br>";
    }
  }

  more_arg("Hale","hale@email","Male",23);
  
 ?>
