<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
	$confFile= fopen("airport.conf", "r") or die("airport.conf does not exist!");
	if ($confFile){
		// echo fread($confFile, filesize("airport.conf"));
		while (!feof($confFile)){
			$buffer= fgets($confFile);
			$isComment= $buffer[0];
			$flag;
			//ignore parser character
			if (strcmp($isComment, "@") == 0){
				ltrim($buffer, "@");
				if (strcmp($buffer, "RUNWAY"))
					$flag= "runway";
				else if (strcmp($buffer, "TERMINAL"))
					$flag= "terminal";
				else if (strcmp($buffer, "DEICING"))
					$flag= "deicing";

			} else {
				echo $buffer;
			}

			echo "<br>";
		}

	}

	#echo fread($confFile, filesize("airport.conf"));
	fclose($confFile);
?>

</body>
</html>