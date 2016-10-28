<?php

$arr = array(1,9,4,6,3,5,8,2,7);

function callback($a,$b)
{
    if($a > $b)
        return 1;
    else if($a < $b)
        return -1;
    else
        return 0;
}

print_r($arr);

usort($arr,"callback");

echo "<br>";

print_r($arr);
 ?>


<?php echo '<hr color="red">'; ?>

<?php

  $arr = array("aaa","aaaa","aa","aaaaaa","aaaa","a","aaaaaaaa");

  function strlen_a($a,$b)
  {
      if(strlen($a) > strlen($b))
          return 1;
      else if(strlen($a) < strlen($b))
          return -1;
      else
          return 0;
  }

  print_r($arr);
  echo "<br>";
  usort($arr,"strlen_a");
  print_r($arr);

 ?>
