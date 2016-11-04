<?php

  // $arr = array('One' => 21,"two" => "hale","sex" =>"man");
  //
  // foreach ($arr as $key => $value) {
  //   # code...
  //   echo "{$key} -- {$value}<br>";
  // }


$group = [
    "name" => "xia biao",
    "value" => "foreach",

    ["name" => "hale","age" => 23,"sex" => "male"],
    ["name" => "hale","age" => 23,"sex" => "male"],
    ["name" => "hale","age" => 23,"sex" => "male"]

];

  // print_r($group);

  echo '<table border="1" width="800" align="center" >';
  echo "<caption><h3>Super <h3></caption>";

  foreach ($group as $key => $row) {
    echo '<tr>';

    if(is_array($row)){
      foreach ($row as $key => $value) {
        # code...

        echo '<td>'.$key."=".$value.'</td>';
      }
    }
      else {
        echo '<td colspan>'.$key.":".$row.'</td>';

    }
    echo '</tr>';

  }

  echo '</table>';
 ?>
