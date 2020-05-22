<?php 
$pe=$_POST['pelicula'];


$url="http://www.omdbapi.com/?apikey=16771658&t=".$pe;
$options=array(
	CURLOPT_HEADER=>false,
	CURLOPT_RETURNTRANSFER=>true,
	CURLOPT_TIMEOUT=>20,
	CURLOPT_URL=>$url,

	//CURLOPT_FAILONERROR=>true;
	CURLOPT_CUSTOMREQUEST=>"GET",
);

	$handle=curl_init();
	curl_setopt_array($handle, ($options));
	$response=curl_exec($handle);
	echo $response;
	$film=json_decode($response,true);
	//echo $film;
	//echo var_dump($film);
	
	/*echo "<table>";
	echo "<tr><td><img src='$film[poster]/></td>
	<td><h3>$film[title]</h3> <p>$film[plot]</p></td>
	</tr>"

	echo "</table>"
	*/

	$contador=0;

	foreach ($film as $item => $peli) {
		if ('Actors'==$item) {
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo $peli;
				echo "<br>";
				echo "<br>";
				$contador=$contador+4;
				echo "Actores: ".$contador;
				
				/**
				echo "<br>";
				var_dump($peli);
				echo "<br>";
				echo "<br>";
				echo "<br>";
				
				foreach ($peli as $pe => $p) {
					echo "esta es:". $p;
				}
				*/
			}
		}





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<br><a href="consultar.php">Desea consultar otro peli</a>
</body>
</html>

