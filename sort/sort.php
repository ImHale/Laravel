<?php

  $sort = array(3,12,34,5,75,345,26,8,9,543,24);

  sort($sort);

  foreach ($sort as $value) {
    echo $value ."---\n";
  }

  echo "<hr>";

  $rsort = array(123,432,5423,6,3,45,23,454,1,298,5435432);

  rsort($rsort);
  foreach($rsort as $value)
  {
    echo $value ."---\n";
  }

 ?>
