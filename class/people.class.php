<?php
  class People {
    var  $name ;
    var  $age ;
    var  $sex ;


    function People(){
        echo "Hello Gou Zao <br> ";
    }

    function run()
    {
      echo "{$this -> name}  can run <br>";

      $this -> say();
    }

    function say()
    {
      echo "{$this -> name}  can say <br>";
    }
  }

  $man = new People();

  $woman = new People();

  $man -> name = "Hale";

  $woman -> name = "Abby";

  $man -> run();

  $woman -> say();

 ?>
