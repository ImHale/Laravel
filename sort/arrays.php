<?php

$group = [


      ["name" => "hale","age" => 23,"sex " => "male"],
      ["name" => "hale","age" => 23,"sex " => "male"],
      ["name" => "hale","age" => 23,"sex " => "male"],


      ["name" => "hale","age" => 23,"sex " => "male"],
      ["name" => "hale","age" => 21,"sex " => "male"],
      ["name" => "hale","age" => 23,"sex " => "male"],


      ["name" => "hale","age" => 23,"sex " => "male"],
      ["name" => "hale","age" => 23,"sex " => "male"],
      ["name" => "hale","age" => 23,"sex " => "male"]

];

  // echo $group[1][1]['age'];
  //
  // echo "<pre>";
  //   // var_dump($group);
  // echo "</pre>";
  //
  // $arr[0]["name"] = "name";
  // $arr[0]['name'] = "hale";
  // $arr[0]['name'] = "sher";
  //
  // echo "string";
echo '<table border="1" width="800" align="center"> ';
echo '<caption><h3>Foeach Array</h3></caption>';
foreach ($group as $value) {
  # code...
  echo '<tr>';
  foreach ($value as $values) {
    # code...
    echo "<tr>";
    echo '<td>'.$values.'</td>';
  }
}
echo "<table>";



 ?>


<?php
  // $one = array('name' => "hale",'age' => 18,"email" => "hale@163.com");
  // $two = array('name' => "mike",'age' => 23,'emial' => "mike@163.com");
  // $three = array("name" => "adam","age" => 21,"email" => "adam@163.com");

//   $group = array (
//           array("name" => "hale","age" => 23,"email" => "hale@163.com"),
//           array("name" => "adam","age" => 21,"email" => "adam@163.com"),
//           array("name" => "mike","age" => 22,"email" => "mike@163.com")
// );
//
//   // echo "<pre>";
//   // var_dump($group[2]['age']);
//   // echo "</pre>";
//
//   $arr = $group[1];
//
//   echo $arr["email"];
//
//   echo $group[1]["name"];
//
//  // ?>

<!-- <?php

  $arr = array("one","two","three","four","five","six","serve");

  for ($i=0; $i < count($arr) ; $i++) {
    # code...
    echo $arr[$i]."<br>";
  }

 ?> -->
