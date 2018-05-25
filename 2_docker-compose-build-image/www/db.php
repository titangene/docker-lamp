<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LAMP - Docker</title>
</head>

<body>
<h1>LAMP - Docker</h1>
<?php
$dsn = 'mysql:host=mysql; dbname=testdb';
$user = 'root';
$password = 'admin';

try {
	$pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo 'Connection failed: '.$e->getMessage();
}

$stmt = $pdo -> query("SELECT * FROM people");
$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

foreach($results as $result) {
	foreach($result as $key => $value) {
		echo $key.": ".$value."<br />";
	}
	echo "<hr />";
}
?>
</body>
</html>