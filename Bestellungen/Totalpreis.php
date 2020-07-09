<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>
<?php

	$con = mysqli_connect("","root","");
	

	mysqli_select_db($con, "detailhaendler");
	

	$res = mysqli_query($con, "SELECT Kundenname,Ort,Bestellnummer,sum(Menge*Einheitspreis) FROM bestellungen GROUP BY Kundenname,Bestellnummer");
	

	$num = mysqli_num_rows($res);
	

	
	if($num > 0)
		echo "";
	else
		echo "keine Ergebnisse!<br>";
	
	echo "<table width='100%' border='1'>
	<tr><th>Kundenname</th><th>Ort</th><th>Bestellnummer</th><th>Totalpreis</tr>";

	while ($dsatz = mysqli_fetch_assoc($res))
	{
		echo "<tr><td>"
		. $dsatz["Kundenname"] . "</td><td>"
        .$dsatz["Ort"]."</td><td>"
        .$dsatz["Bestellnummer"]."</td><td>"
        .$dsatz["sum(Menge*Einheitspreis)"]."</td></tr>";
        

	}
	echo "</table>";
	

	mysqli_close($con);
	?>
</body></html>