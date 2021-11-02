<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP String Veri Türü - MMO Tutkunları PHP Dersleri 2021</title>
</head>
<body>
<?php
/**
 * STRING VERI TÜRÜ
 * String iki şekilde tanımlanır. Tek tırnak içerisinde ve çift tırnak içerisinde;
 * Tek tırnak: Değişkenin değeri yerine ismi yazdırır.
 * Çift tırnak: Değişkenin değerini yazdırır.
 *
 * $isim = 'Eray',
 * $yazi = 'Merhaba $isim';
 * $yazi2 = "Merhaba $isim";
 */

$ad = 'Eray';

echo 'Merhaba $ad<br />';
echo "Merhaba $ad<br />";

/**
 * Kontrol fonksiyonu
 * is_string($variable) => değişkenimizin string olup olmadığını kontrol eder.
 */

$soyad = 'Öksüz';
$sayi = 5;
if (is_string($soyad)) // is_string($sayi1)
{
    echo '$soyad değişkeni string veri türüdür.';
}
else
{
    echo '$soyad değişkeni string veri türü değildir. Değişkenin veri türü: '.gettype($sayi);
}

/**
 * DİĞER VERİ TÜRLERİNDEN STRING'E ÇEVİRME İŞLEMİ
 * Herhangi bir değişkenin başına (string) yazarsak çevirme işlemi gerçekleşir.
 */

echo var_dump((string)5); //string '5'
echo var_dump((string)true); //string '1'
echo var_dump((string)false); //strinh ''
//echo var_dump((string)[]); //Notice: Array to string conversion in

$dizi = [5, 3.14, []];
foreach ($dizi as $d)
{
    if (!is_array($d))
        echo var_dump((string) $d);
}

/**
 * STRING BİRLEŞTİRME
 */

$metin = "Merhaba";

//echo $metin . " nasılsınız?<br />";

//$metin = $metin . " nasılsınız?<br />";
$metin .= " nasılsınız? <br />";

//echo $metin;

echo $metin.= " iyiyim siz nasılsınız?";
?>
</body>
</html>