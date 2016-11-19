<?php

  interface USB
  {
    const WIDTH = 12;
    const HEIGHT = 8;

    function load();
    function run();
    function stop();
  }

  class Computer
  {
    function useUSB(USB $usb)
    {
      $usb -> load();
      $usb -> run();
      $usb -> stop();
    }
  }

  class Users
  {
    function work()
    {
      $u = new Computer();

      $m = new Mouse();

      $k = new KeyPress();

      $u -> useUSB($m);
      $u -> useUSB($k);
    }
  }

  class Mouse implements USB
  {
    function load()
    {
      echo "鼠标加载成功! <br>";
    }
    function run()
    {
      echo "鼠标运行成功! <br>";
    }
    function stop()
    {
      echo "鼠标卸载成功! <hr>";
    }
  }

  class KeyPress implements USB
  {
    function load()
    {
      echo "键盘加载成功! <br>";
    }
    function run()
    {
      echo "键盘运行成功! <br>";
    }
    function stop()
    {
      echo "键盘卸载成功! <br>";
    }
  }

  $m = new Users;
  $m -> work();

 ?>
