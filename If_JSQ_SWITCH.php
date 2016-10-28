<?php
if (isset($_POST['sub'])) {
  # code...
    $bz = true;

    $errormess = "Error Messages<br>";

    if($_POST['one'] == ""){
        $bz = false;
        $errormess .= "One is empty <br>";
    }else {
      # code...
      if (!is_numeric($_POST['one'])) {
        # code...
          $bz = false;
          $errormess .= "One Can't OK <br>";
      }
    }


    if($_POST['two'] == ""){
        $bz = false;
        $errormess .= "Two is empty <br>";
    }else {
      # code...
      if (!is_numeric($_POST['two'])) {
        # code...
          $bz = false;
          $errormess .= "Two Cant't OK <br>";
      }
    }

    if($bz){

    $sum = "";
    switch($_POST['ysf']){
        case '+': $sum = $_POST['one'] + $_POST['two'];
          break;
        case '-': $sum = $_POST['one'] - $_POST['two'];
          break;
        case '*': $sum = $_POST['one'] * $_POST['two'];
          break;
        case '/': $sum = $_POST['one'] / $_POST['two'];
          break;
        case '%': $sum = $_POST['one'] % $_POST['two'];
          break;
    }
  }
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      JSQ
    </title>
  </head>
  <body>
    <table align="center" siz="5" width=400">
      <form class="" action="If_JSQ_SWITCH.php" method="post">
        <caption><h3>link Blade</h3></caption>
        <tr>
          <td><input type="text" size="5" name="one" value="<?php echo $_POST['one']; ?>"> <br></td>
          <td>
            <select class="" name="ysf">
              <option <?php if($_POST['ysf'] =="+" ) echo "selected" ?> value="+">+</option>
              <option <?php if($_POST['ysf'] =="-" ) echo "selected" ?> value="-">-</option>
              <option <?php echo $_POST['ysf'] == "*" ? "selected" : " "; ?> value="*">*</option>
              <option <?php if($_POST['ysf'] =="/" ) echo "selected" ?> value="/">/</option>
              <option <?php if($_POST['ysf'] =="%" ) echo "selected" ?> value="%">%</option>
            </select>
          </td>
          <td><input type="text" size="5" name="two" value="<?php echo $_POST['two']; ?>"></td>
          <td><input type="submit" name="sub" value="计算"></td>
        </tr>
        <br>
        <tr>
          <td colspan="4">
            <?php
              if($bz){
                echo "计算结果: {$_POST['one']} {$_POST['ysf']} {$_POST['two']} = {$sum}";
              }else {
                echo $errormess;
              }
             ?>
          </td>
        </tr>
      </form>
    </table>
  </body>
</html>
