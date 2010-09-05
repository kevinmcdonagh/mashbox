<html>
<head>
<?php
	$dbh = new PDO('sqlite:mashbox.sqlite');
	foreach($dbh->query('SELECT * FROM tracks') as $row){
	 	echo ($row['artist'] .  $row['title'] .  $row['genre'] .  "\n");
  	}
	$dbh = null;
?>
</head>
</html>