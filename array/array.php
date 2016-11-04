<?php

  // 数组的串行化

  $arr = array("name" => "Hale","age" => 21,"sex" => "Man");

  $str = json_encode($arr);
  // echo $str;

  // 反串行化
  $parr = json_decode($str,true);

  var_dump($parr);

  echo $parr -> name;

 ?>

<?php echo "<hr>" ?>

 <?php

  $str = "echo 'eval';";


  ?>
