<?php

  include "clone.php";

  $a = new Person("Hale",21,"男");
  // $a -> say();
  // $a -> eat("吃饭","睡觉","打斗逗","爬山","学习","滑雪");

  // 串行化
  $str = serialize($a);

  // 反串行化
  // $p = unserialize($str);
  // $p ->say();

  file_put_contents("save.txt",$str);

  echo "保存文件";

 ?>
