<?php

  class Study{
    var $name = "Hale";
    var $age = 21;
    var $sex = "Man";
    var $pro = "PHP,Java";

    function chinese($yuwen,$hanyu)
    {
      return $yuwen.$hanyu;
    }
    function english($study)
    {
      return $study;
    }

  }

  $aa = new Study();
  echo $aa -> name = "WTF";

  $bb = new Study();

  echo $aa -> name ."<br>";
  echo $bb -> pro ."<br>";

  echo $aa -> chinese("语文","汉语");
  echo $bb -> english("英语提高学习编程的效率");

 ?>


<!-- <?php

  class Study {

    // 修饰词 变量 (成员属性)

    var $name = "Hale";
    var $age = 21;
    var $sex = "man";

    // 函数 (成员方法)

    public function Language($English,$Chinaese)
    {
      return "Hello Language";
    }
    function KeMu($YuWen,$ShuXue){
      return "语文,数学";
    }
    function ProGrammer($PHP,$Java)
    {
      return "PHP, Java";
    }
  }

  $aClass = new Study();
  $bClass = new Study;

  $aClass -> name ="Mike";
  echo $aClass -> name."<br>";
  echo $bClass -> name."<br>";

 ?> -->
