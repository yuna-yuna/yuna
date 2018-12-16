<html>
<head>
<title>mission_3-1.php</title>
</head>
<body>

<?php
$dsn = 'mysql:dbname=データベース名;host=localhost';
$user = 'ユーザー名';
$password = 'パスワード';

try{
$pdo=new PDO($dsn,$user,$password);
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {\\\
 exit('データベース接続失敗。'.$e->getMessage());
}

?>
</body>
</html>
