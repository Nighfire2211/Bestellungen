<?php

if (isset($_POST['ID']))
{
    $ID = $_POST['ID'];
    $Menge = $_POST['menge'];

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'detailhaendler');
    mysqli_query($con, "UPDATE `bestellungen` SET `Menge`='$Menge' WHERE `id` = '$ID'");

    mysqli_close($con);
}


$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'detailhaendler');
$res = mysqli_query($con, "SELECT * FROM bestellungen");
$count = 1;
$num = mysqli_num_rows($res);

echo "<table width='50%' border='1'>
    <tr><th>ID</th><th>Kundenname</th><th>Ort</th><th>Bestellnummer</th><th>Bestelldatum</th><th>Menge</th><th>Einheit</th><th>Artikelname</th><th>Einheitspreis</th></tr>";
    
    while ($dsatz = mysqli_fetch_assoc($res))
    {
        echo "<tr><td>" . $dsatz["id"] . "</td><td>"
        . $dsatz["Kundenname"] . "</td><td>"
        . $dsatz["Ort"] . "</td><td> "
        . $dsatz["Bestellnummer"] . "</td><td>"
        . $dsatz["Bestelldatum"] . "</td><td>"
        . $dsatz["Menge"] . "</td><td> "
        . $dsatz["Einheit"] . "</td><td> "
        . $dsatz["Artikelname"] . "</td><td> "
        . $dsatz["Einheitspreis"] . "</td></tr>";
    }

    echo "</table>";
    mysqli_close($con);

    ?>