<html>
<head>
<title>mission_3-3.php</title>
</head>
<body>

<?php
$dsn = 'mysql:dbname=�f�[�^�x�[�X��;host=localhost';
$user = '���[�U�[��';
$password = '�p�X���[�h';
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
