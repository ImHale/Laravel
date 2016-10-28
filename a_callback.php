<?php

function callback($one,$two,$three)
{
  echo "$one--$two--$three";
}

call_user_func_array("callback",array("one-1","two-2",'three-3'));

 ?>
