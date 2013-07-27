<?php
	require_once("imdb.php"); 
?>

<!doctype html>
<html>
	<head>
		<title>IMDB CheckIns Lab | Websthetics.gr</title>
	</head>
	<body>
		<h1>IMDB CheckIns</h1>
		<p><i>Please enter your IMDB user id to the textbox to experience magic :)</i></p>
		<form method="post" action="index.php">
		<input type="text" name="imdb"/>
		<input type="submit"/>
		</form>
<?php
		if(isset($_POST["imdb"])) {
			$imdbHandler = new imdbCheckInTracker($_POST["imdb"]);
			$imdbHandler->analyze();
			$imdbHandler->printUserCheckInHistory();
		}
?>
	</body>
</html>