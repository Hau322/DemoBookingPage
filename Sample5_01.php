<?php
$link= mysqli_connect("localhost","jikyo","pass","jikkyo_pension");
if($link == null){
    die( "接続に失敗しました:".mysqli_connect_error());
}
mysqli_set_charset($link,"utf8");
$result = mysqli_query($link,"SELECT*FROM room_type");
echo "データ件数は" .mysqli_num_rows($result)."件<br>";
While ($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
    echo $row['type_name']. "<br>";
}
mysqli_free_result($result);
// }else {
//     echo "接続に成功しました";
// }
  mysqli_close($link);
?>