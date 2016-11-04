<?php
  $ksort = array(10=>"Aspirant",2 =>"Hale",8=>"Donscan","Aspire","Adam","PHP");

  print_r($ksort);
  echo "<br>";
  ksort($ksort);
  print_r($ksort);
  echo "<br>";

  $krsort = array("Name" => "Hale","Age" => 18,"Sex" => "Man");

  krsort($krsort);
  print_r($krsort);
  echo "<br>";
  sort($krsort);
  print_r($krsort);
  echo "<br>";
  asort($krsort);
  print_r($krsort);

  $usort = array("file.txt","File.txt","Files.txt","afile.txt","fi.txt");

  print_r($usort);
  echo "<br>";

  usort($usort,function($a,$b){
      $alen = strlen($a);
      $blen = strlen($b);
      if($alen > $blen){
          return 1;
      }else if($alen < $blen)
      {
          return -1;
      }else {
          return 0;
      }
  });
  print_r($usort);
  echo "<br>";

  $a = array('a',10,'b',20);
  $b = array(1,2,4,3);
  array_multisort($a,$b);
  print_r($a);
  echo "<br>";
  print_r($b);

  $data = array(
      array("name" => "Hale" ,"age" => 18,"sex" => "man" ,"id" => 1 ),
      array("name" =>"Mike" ,"age" =>23 ,"sex" => "man","id" => 3),
      array("name" => "Admin","age" => 21,"sex" => "woman","id" => 2)
  );

  $name = array();
  $age = array();

  foreach ($data as $value) {
    # code...
    $name[] = $value["name"];
    $age[] = $value["age"];
  }

  array_multisort($name,SOFT_DESC,$age,$data);
  echo "<pre>";
  print_r($data);
  echo "</pre>";


 ?>
