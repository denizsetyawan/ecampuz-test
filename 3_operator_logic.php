<!-- Not solve -->

<!DOCTYPE html>
<html>
<body>

<?php  
$a = 7;
$b = 2;
$hasil = $a - $b;
 
$count = 1;
while ($hasil !== 1){

$hasil = $hasil - $b;
$count++;
}


echo "Hasil dari $a : $b adalah $count";
?>
</body>
</html>