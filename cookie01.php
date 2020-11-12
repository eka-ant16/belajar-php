<?php
$value = 'achmatim';
$value2 = 'Achmad SOlichin';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini halaman pengesetan cookies</h1>";
echo "<h2>Klik <a href='cookie02.php'>Disini </a> Untuk pemeriksaan cookies</h2>";
?>