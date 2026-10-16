<!-- liên kết với database_ tiền xử lý -->
<?php
$link = mysqli_connect("localhost","jikkyo","pass","jikkyo_persion");
  if($link == null){
    die("接続に失敗しました：" .mysqli_connect_error());
  }
  mysqli_set_charset($link,"utf8");
?>
<!-- lấy data từ table _ xử lý thực tế -->
  $result = mysqli_query($link,"SELECT* FROM room_type");
  echo "<ul>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<li><a href="#">.$row['type_name'].</a></li>"
    }
  echo"</ul>";
 <!--Ngắt kết nối cơ sở dữ liệu _ hậu xử lý-->
 <?php
    mysqli_free_result($result);
    mysqli_close($link);
 ?>