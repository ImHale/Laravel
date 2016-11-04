<?php

    class Person
    {
        private $name;
        protected $age;
        public $sex;

        public function __construct($name, $age, $sex)
        {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }
        public function say()
        {
            echo "我的姓名是:{$this->name},我的年龄是:{$this->age},我的性别是:{$this->sex}";
        }
        public function eat()
        {
            echo "Hello {$this->name}";
        }
        public function run()
        {
        }
    }

  class Student extends Person
  {
      public $study;

      public function __construct($name, $age, $sex, $study)
      {
          parent::__construct($name, $age, $sex);

          $this->study = $study;
      }

      public function study()
      {
      }
      public function say()
      {
          // Person::say();
      parent::say();
          echo '<br>This is Fu Gai ::';
      }
  }

  class Teacher extends Student
  {
      public $teach;
      public function teach()
      {
      }
  }

// $s = new Teacher("Hale",21,"男");
// $s -> say();

// echo "<hr>";

// $d = new Teacher();
// $d -> eat();

// echo "<hr>";

// $a = new Teacher("Hale",21,"男");
// echo $a -> sex;
// echo $a -> name;
// echo $a -> age;

// echo "<hr>";

$e = new Student('Mike', 23, 'Man');
echo $e->say();
