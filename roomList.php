<?php
  $link= mysqli_connect("localhost","jikkyo","pass","jikkyo_persion");
  if ($link == null){
    die("接続に失敗しました:". mysqli_connect_error());
  }
  mysqli_set_charset($link,"utf8");
?>