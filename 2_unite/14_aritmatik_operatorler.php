<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ARİTMATİK OPERATÖRLER - MMO TUTKUNLARI PHP DERSLERİ 2021</title>
</head>
<body>
<?php
/**
 * PHP ARİTMATİK OPERATÖRLER
 * Matematiksel işlemleri gerçekleştirmek için kullanacağız.
 *
 * $a = 5;
 * $b = 2;
 *
 *    $a + $b => Toplama
 *    $a - $b => Çıkartma
 *    $a * $b => Çarpma
 *    $a / $b => Bölme
 *    $a % $b => Kalan (Mod alma)
 *    $a ** $b => Üst
 *
 * Matematiksel işlemlerde işlem önceliğini parentez ile belirtiriz.
 *
 * (2**2)*5
 */

$a = 5;
$b = 4;
$c = 2;

//echo var_dump($a/$b); 10/4  float veri tipi olur

echo "TOPLAMA: " . ($a + $b) . "<br />";
echo "ÇIKARTMA: " . ($a - $b) . "<br />";
echo "ÇARPMA: " . ($a * $b) . "<br />";
echo "BÖLME: " . ($a / $b) . "<br />";
echo "KALAN: " . ($a % $b) . "<br />";
echo "ÜST ALMA: " . ($a**$b) . "<br />";

$pay = ((($a**2)+$c)+(($b**3)-$c))**2;
$payda = ($a**2)+$b+$c;

echo "İŞLEM SONUCU: ". $pay/$payda;

?>

</body>
</html>