<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>图形计算器</title>
  </head>
  <body>
    <center>
      <h1>简单的图形计算器</h1>

        <a href="index.php?action=rect">矩形</a> ||
        <a href="index.php?action=triangle">三角形</a>

      </center>
        <hr><br>

      <?php
        // 设置自动加载这个程序需要的类文件
        function __autoload($classname)
        {
          include strtolower($classname).".class.php";
        }

        // 判断用户是否有选择单击一个形状链接
        if(!empty($_GET['action']))
        {
        // 第一步:创建形状的对象
        $classname = ucwords($_GET['action']);

        $shape = new $classname($_POST);

        // 第二步:调用形状的对象中的界面  view()

        $shape -> view();

        // 第三步:判断用户是否提交了对应图形界面的表单

        if(isset($_POST['dosubmit'])) {

            // 第四步:查看用户输入的数据是否正确 失败就提示

            // 第五步:如果计算图形的面积和周长
          if($shape->yan($_POST)) {
            echo $shape -> name ."的面积为: ".$shape -> area()."<br>";
            echo $shape -> name ."的周长为: ".$shape -> zhou()."<br>";
          }

            // echo $_GET['action'];

          }
        }
        // 如果用户没有单击链接,则是默认访问这个主程序
          else
        {
            echo "请选择一个要计算的图形! <br>";
        }
       ?>

  </body>
</html>
