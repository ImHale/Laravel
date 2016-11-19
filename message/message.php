<?php
  header("Content-Type:text/html;Charset=utf-8");
  // 如果用户提交,然后写入文件


 ?>


<form class="" action="message.php" method="post">
  用户 : <input type="text" name="username" value=""> <br>
  标题 : <input type="text" name="title" value=""> <br>

  内容 : <textarea rows="8" cols="40"></textarea> <br>
  <input type="submit" name="dosubmit" value="留言">
</form>
