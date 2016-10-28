<?php

for ($a= 1; $a <= 9 ; $a++) {
  # code...
  for ($b= 1; $b <=$a ; $b++) {
    # code...
    echo "$b * $a = ".($b*$a)."&nbsp&nbsp";
  }
  echo "<br>";
}


echo "<br>";

for ($c= 9; $c >= 1 ; $c--) {
  # code...
  for ($d = $c; $d >= 1 ; $d--) {
    # code...
    echo "$d * $c = ".($d*$c)."&nbsp&nbsp";
  }
  echo "<br>";
}

?>

<?php

// for ($e=0; $e <=60 ; $e++) {
//   # code...
//   if ($e >= 10) {
//     # code...
//     break;
//   }
//   echo "{$e} eating food <br>";
// }

echo "<br>";

die("die ");
exit("exit this yu ju  ");
for ($g=0; $g <10 ; $g++) {
  # code...
  if($g >5)
    break;
  for ($h=0; $h <10 ; $h++) {
    # code...
    if ($h >5) {
      # code...
      break 2;
    }
    echo "{$g}|{$h}~";
  }
  echo "<br>";
}

 ?>
