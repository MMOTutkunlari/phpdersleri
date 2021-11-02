<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Değişken Değişken Tanımlama - MMO Tutkunları PHP Dersleri 2021</title>
</head>
<body>
<?php
/**
 * Değişken değişken nedir?
 *
 * Değişkenin değerini değişken ismi olarak alır.
 * Değişken değişken oluşturmak için $$ işareti eklenir ve değişken adı yazılır.
 * Örn;
 *
 * $isim = 'isimYaz';
 * $isimYaz = 'Eray';
 * $$isim
 */

$isim = "Eray";
$Eray = "MerhabaEray";
$MerhabaEray = "Bu işin sonu nereye gidecek belli değil..";

echo $$isim."<br />"; //ekrana $Eray değişkenin ismini yazar.
echo $$$isim; //ekranada $MerhabaEray değişkeninin değerini yazar.

?>
</body>
</html>