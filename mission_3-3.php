<html>
<head>
<title>mission_3-3.php</title>
</head>
<body>

<?php
$dsn = 'mysql:dbname=データベース名;host=localhost';
$user = 'ユーザー名';
$password = 'パスワード';
try {
$pdo = new PDO($dsn,$user,$password);
$sql ='SHOW TABLES';
$result = $pdo -> query($sql);
foreach ($result as $row){
 echo $row[0];
 echo '<br>';
}
echo "<hr>";
}

?>
</body>
</html>
