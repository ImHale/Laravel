<?php
$a = false;
$b = 0;
befor:
echo "{$b}1111111<br>";

if ($b > 2) {
  # code...
  goto five;
  $b++;
  goto befor;
}


if ($a) {
  # code...
  goto three;
}else {
  # code...
  goto four;
}
goto three;
echo "2222222<br>";
three:
echo "3333333<br>";
four:
echo "4444444<br>";
five:
echo "5555555<br>";
 ?>
