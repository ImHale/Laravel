<?php

  print_r($_GET);
  echo "<br>";
  print_r($_POST);
  echo "<br>";
  print_r($_REQUEST);
  echo "<br>";

  function getIP()
  {
      static  $realip;

      if (isset($_SERVER)) {
          if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
              $realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
          } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
              $realip = $_SERVER['HTTP_CLIENT_IP'];
          } else {
              $realip = $_SERVER['REMOTE_ADDR'];
          }
      } else {
          if (getenv('HTTP_X_FORWARDED_FOR'))
           {
            $realip = getenv(['HTTP_X_FORWARDED_FOR']);
          }else if (getenv('HTTP_CLIENT_IP')) {
              $realip = getenv(['HTTP_CLIENT_IP']);
          }else {
            $realip = getenv(['REMOTE_ADDR']);
          }
      }
      return $realip;
  }

  var_dump(getIP());
