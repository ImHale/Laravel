<?php

  header("Content-Type:text/html; Charset = utf-8");

  function getFilePro($filename)
  {
      // 获取文件的属性

      if(file_exists($filename))
      {
        echo "Exists <br>";

        getFileType($filename);

      }else {
        echo "No Exists <br>";
      }

  }

  function getFileType($filename)
  {
    // 获取文件的类型
    switch(filetype($filename))
    {
        case 'dir':
          echo "Dir";
          break;

        case 'file':
          echo "File";
          break;
        case 'block':
          echo "Block";
          break;
        case 'lock':
          echo "Lock";
          break;
        default :
          echo 'don\'t Konw';
    }


  }


  getFilePro("../../blog/composer.lock");

 ?>
