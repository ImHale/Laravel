<?php

  $lamp = array("os" => "linux", "webserver" => 'Apache','db' => "MySQL","language" => 'PHP');

  echo "A OS is {$lamp['os']} <br>";
  echo "Webserver is $lamp[webserver]hhaha<br>";
  echo "DB is {$lamp["db"]}istudy <br>";
  echo "Language is $lamp[language] <br>";
  echo "PHP is {$lamp[language]}<br>";


// $str = "hello world";
// $str{3} = "super junior";
// echo $str;
//
// $int = 100;
//
// echo "Hello $int world";
// echo "string";

  $str = "你好,世界!";
  echo strlen($str);

 ?>


<!-- <?php

    $str = "one twothreefourfivesix";

    $s = "";

    for($i = 0;$i < strlen($str);$i++)
    {
      if($i%2==0)
      {
        $s .= $str{$i};
      }
    }

    echo $s;


    // $hi = "hello world";
    // echo strlen("Hello World")."<br>";
    // echo $hi[0].$hi[1].$hi[2].$hi[5].$hi[4]."<br>";
    // echo $hi{1}.$hi{2}.$hi{3}.$hi{5}.$hi{7}."<br>";

    // echo count(123)."<br>"; // count 所有的数据类型都统计为  1
 ?> -->
