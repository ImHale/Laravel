<!-- <?php

  echo '<table border="1" align="center" width="800">';
  echo '<caption><h3>While and If Study</h3></caption>';

  $a = 0;
  while($a < 50){
    $b = 0;
    if($a % 2 == 0)
    {
      echo '<tr bgcolor="blue">';
    }else {
      echo '<tr>';
    }
    while($b < 10){
      echo '<td>'.$b.'</td>';
      $b++;
    }
    echo '</tr>';
    $a++;
  }
  echo '</table>';
 ?> -->

<?php

$a = 0; $b = 0;
while ($a <= 100) {
  # code...
  $b += $a;
  $a++;
}
echo $b;

 ?>
