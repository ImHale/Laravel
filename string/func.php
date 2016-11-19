<?php

   // echo 和 print 的区别
  //  print 可以打印出值, echo 不可以.
  //  echo 的指令方式可以打印多个值,参数
  //  print 不管那种方式都不能打印多个惨出

    // echo "Hello ","world" ,"<br>";
    //
    // echo ("string")."<br>";
    //
    // var_dump(print("hale"));

    // exit("aaaaaaaa");

    // die("what is ?");
    // exit("oh my god");

    $str = "hello 0123456789 World ";
    echo "<br>";

    var_dump($str);
    echo "<br>";

    // $nstr = ltrim($str, " H d ");
    // $nstr = rtrim($str,"H d ");
    $nstr = trim($str,"0..9a..z ");
    var_dump($nstr);


 ?>
