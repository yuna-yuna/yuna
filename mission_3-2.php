<html>
<head>
<title>mission_3-2.php</title>
</head>
<body>

<?php
$dsn = 'mysql:dbname=データベース名;host=localhost';
$user = 'ユーザー名';
$password = 'パスワード';

try {
$pdo = new PDO($dsn,$user,$password);
$sql= "CREATE TABLE tbtest"
." ("
. "id INT,"
. "name char(32),"
. "comment TEXT"
.");";
$stmt = $pdo->query($sql);
}

?>
</body>
</html>
