<!--
  int           整型
  float double  浮点型
  string        字符型
  boolean       布尔型

  array         数组
  object        对象
  resource      资源
  null          空

 -->

<?php
  echo "总数为: <br>";

  function funName($b)
  {
    $sum = 0;
    for ($a=0; $a < $b; $a++) {
      # code...
      $sum += $a;
    }
    return $sum;
  }
  echo "50 的和为:" .funName(50)."<br>";
  echo "100 的和为:".funName(100)."<br>";
  if (function_exists(funName)) {
    # code...
    echo "Exists <br>";
  }else {
    echo "Not Exists <br>";
  }
 ?>

<?php

function demo($age,$sex)
{
  $sex = "male";
  echo "Hello Function".$age."<br>".$sex;
}
demo(19,"nan");

 ?>
