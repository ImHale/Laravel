<?php

  namespace win\hale\www;

  include "include.inc.php";

  use \Hi;

  use win\hale\www as hale;

  class Hello
  {
    function hello()
    {
      echo "Hello World! <br>";
    }
  }

  function var_dump()
  {
    echo "Hello Var_dump <br>";
  }

  var_dump(100);

  function hello()
  {
    echo "Hale Hello !<br>";
  }

  Hi::say();

  Hello::hello();
  hello();



 ?>



<!--
<?php

  // namespace Hello;
  //
  // include "include.inc.php";
  //
  // function one ($o){
  //   echo "Hello ONe!   {$o} <br>";
  // }
  // function two (){
  //   echo "Hello Two! <br>";
  // }
  //
  // one("new hello world");
  // \one();
  //
  // two();

  // namespace world;
  // //
  // // const h="hello world";
  // // class Demo{
  // //
  // //   function demo()
  // //   {
  // //     echo "Hale";
  // //   }
  // // }
  // // function de()
  // // {
  // //   echo "Hello ";
  // // }
  // // de();

  // namespace world\hello;
  // class helo {
  //   function hi()
  //   {
  //     echo "Hi";
  //   }
  // }

  // namespace hale\name;
  //
  // function hale()
  // {
  //   echo "Hello world <br>";
  // }
  //
  // echo __NAMESPACE__;
  //
  // // $hi = 'hale\name\hale';
  // $hi = __NAMESPACE__.'\hale';
  // echo "<br>";
  // $hi();
  //
  // namespace\hale();
  // namespace\hale();



  // namespace {
  //   echo "Hello";
  // }

  // namespace{
  //   echo "World";
  // }


 // ?>
 <?php

  // namespace hello;
  // namespace win\hale\www;

  // use win\hale\www as Hale;

  // use win\hale\www;
  //
  // function sad()
  // {
  //   echo "Hello first";
  // }
  //
  // // namespace world;
  //
  // function say()
  // {
  //   echo "Hello two ";
  // }

  // namespace\say();
  // namespace\sad();

  // Hale\say();

  // www\sad();


 // ?> -->
