<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php
	/* Verbindung aufnehmen */
	$con = mysqli_connect("","root","");
	
	/*Datenbank auswählen */
	mysqli_select_db($con, "detailhaendler");
	
	$id = $_POST["ID"];
	
	$sql = "SELECT * FROM bestellungen WHERE id = $id";
	$res = mysqli_query($con, $sql);
	$num = mysqli_num_rows($res);
	
	if ($num > 0)
	{
		//Lösche Kunde mit $id

		$sql = "DELETE FROM bestellungen WHERE id = $id";
					
		mysqli_query($con, $sql);
		
		// Alle Kunden ausgeben
		$res = mysqli_query($con, "SELECT * FROM bestellungen");
		
		
		$num = mysqli_num_rows($res);
			
        if($num > 0)
		echo "";
	else
		echo "keine Ergebnisse!<br>";
	
		
        echo "<table width='100%' border='1'>
        <tr>
        <th>ID</th>
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
	}
		else
	{	
		//Keine entsprechende ID
		echo "keinen Datensatz mit entsprechender 'ID' gefunden! <br><br>";
		// Alle Kunden ausgeben
		$res = mysqli_query($con, "SELECT * FROM bestellungen");
		
		
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
	}
	
	mysqli_close($con);
?>
</body></html>