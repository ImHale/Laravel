<?php

  $dirname = "./blog";

  function fordir($dirname)
  {
      $dir = opendir($dirname);


      readdir($dir);


      closrdir($dir);
  }

 ?>




<!-- <?php

  function digui($n)
  {
    echo $n."<br>";

      if($n > 0 )
        digui($n - 1);
      else
        echo "----------";

    // echo $n."<br>";
  }

  digui(10);

 ?> -->
