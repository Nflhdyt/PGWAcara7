<!DOCTYPE html>
<html>
<body>

<?php
// Table
$makanan = array("Bakwan", "Tempe", "Ciki", "Mie", "Martabak" );
$harga = array("2000", "1000", "3000", "5000", "10000");
$rasa = array("Asin", "Asin","Gurih", "Asin", "Manis");

echo "<table border='1'>";
echo "<tr><th>Makanan</th><th>Harga</th><th>Rasa</th></tr>"; 
for($i=0; $i<5; $i++) { 
    echo "<tr><td>$makanan[$i]</td><td>$harga[$i]</td><td>$rasa[$i]</td></tr>";
}
echo "</table>";
?>


</body>
</html>