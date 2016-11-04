<?php

    class Person
    {
      const SEX = "Man";
      
      static function say()
      {
          echo self::SEX;
      }
    }

    Person::say();

    // echo Person::SEX;

 ?>
