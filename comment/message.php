<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8" />
<title>guest.php</title>
</head>
<body>
<?php
$file = "guest.txt";
// 檢查檔案是否存在, 且不是空檔案
if ( !file_exists($file) or filesize($file) == 0 )
   echo "<h2>目前沒有任何留言！</h2><hr/>";
else
   readfile($file);  // 讀取和顯示留言
?><br/>
| <a href="guest.php">新增留言</a> |
</body>
</html>