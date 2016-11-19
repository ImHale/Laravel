<?php

  session_start();

  // $_SESSION['views'] = 1;

  if(isset($_SESSION['views']))
  {
    $_SESSION['views'] = $_SESSION['views'] + 1;
  }
  else
  {
    $_SESSION['views'] = 1;
  }
  echo "浏览量: " .$_SESSION['views'];
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
 </html>

 <?php

 echo "浏览量:" .$_SESSION['views'];

  ?>
