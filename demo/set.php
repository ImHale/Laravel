<!-- <?php

  $a = $b = $c = $d = 100;

  unset($a);

  $bool = isset($a);
  var_dump($bool);

 ?> -->

<!-- <?php

  // $bool = true;
  $bool = false;

  if($bool)
  {
    echo "This is OK";
  }else {
    echo "Not Good";
  }

 ?> -->

 <?php

  $connect = mysql_connect("localhost","root","root");

  if($connect)
  {
    echo "OK";
  }
  else {
    echo "Not ok";
  }

  ?>
