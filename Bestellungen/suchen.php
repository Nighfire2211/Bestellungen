<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php

	$con = mysqli_connect("","root","");
	

	mysqli_select_db($con, "detailhaendler");
	
	$kunden = $_POST["Kunde"];
	

	$sql = "SELECT * FROM bestellungen";
	$sql.= " WHERE Kundenname LIKE '$kunden%'";
	//echo $sql;
	$res = mysqli_query($con, $sql);
	

	$num = mysqli_num_rows($res);
	

	
	if($num > 0)
		echo "";
	else
        echo "keine Ergebnisse!<br>";
        
        echo "<table width='100%' border='1'>
        <tr>
        <th>Id</th>
        <th>Kundenname</th>
        <th>Ort</th>
        <th>Bestellnummer</th>
        <th>Bestelldatum</th>
        <th>Menge</th>
        <th>Einheit</th>
        <th>Artikelname</th>
        <th>Einheitspreis</th>
        </tr>";
    
        while ($dsatz = mysqli_fetch_assoc($res))
        {
            echo "<tr><td>" . $dsatz["id"] . "</td><td>"
            . $dsatz["Kundenname"] . "</td><td>"
            . $dsatz["Ort"] . "</td><td>"
            . $dsatz["Bestellnummer"] . "</td><td>"
            . $dsatz["Bestelldatum"] . "</td><td>"
            . $dsatz["Menge"] ."</td><td>"
            . $dsatz["Einheit"] ."</td><td>"
            . $dsatz["Artikelname"] ."</td><td>"
            . $dsatz["Einheitspreis"] ."</td><td>";
        }
        echo "</table>";
        

	mysqli_close($con);
	?>
</body></html>