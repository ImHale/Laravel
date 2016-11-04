<?php

  abstract class Person
  {
      abstract function say();

      abstract function eat();

      function run()
      {
          echo "Eat <hr>";
      }

      function lay()
      {
          echo "Lay <hr>";
      }

  }

  class Man extends Person
  {
      function say()
      {
        echo "我是男人, 我喜欢女人! <hr>";
      }

      function eat()
      {
        echo "我是好人, 我只吃素! <hr>";
      }
  }
  class Woman extends Person
  {
      function say()
      {
        echo "我是女人, 我喜欢男人! <hr>";
      }
      function eat()
      {
        echo "我是好人, 我不吃肉! <hr>";
      }
  }

  $man = new Man();
  $man -> say();
  $man -> eat();

  $woman = new Woman();
  $woman -> say();
  $woman -> eat();




  // $u = new Person();
  // $u -> say();
  // $u -> run();
  // $u -> eat();
  // $u -> lay();

  // Person::say();
  // Person::run();
  // Person::eat();
  // Person::lay();

 ?>
