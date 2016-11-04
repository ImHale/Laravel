<?php

  interface Teacher
  {
      function teach();
      function say();
      function write();
      function run();
  }

  interface School
  {
    function room();
  }

  interface Student extends Teacher
  {
      function study();
      function work();
  }

  class Hale
  {
    function study_php()
    {
      echo "PHP 是世界上最好的语言! <hr>";
    }
    function study_html()
    {
      echo "HTML 是文本编辑语言! <hr>";
    }
  }

  class Mike extends Hale implements Student,School
  {
    function study()
    {
        echo "我是学生,我喜欢学习! <hr>";
    }
    function work()
    {
        echo "我已经工作,我可以挣钱! <hr>";
    }

    function teach()
    {
        echo "高骆峰是我的恩师 <hr>";
    }
    function say()
    {
        echo "我想说: PHP 是世界上最好的语言! <hr>";
    }
    function write()
    {
        echo "我可以写 PHP 编程乐! <hr> ";
    }
    function run()
    {
        echo "老师和学生都可以跑步! <hr>";
    }

    function room()
    {
        echo "学生和老师都在教室! <hr>";
    }
  }

  Mike::room();

  $me = new Mike();
  $me -> say();

  Hale::study_php();

 ?>
