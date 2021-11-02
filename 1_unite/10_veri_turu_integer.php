<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Integer Ver Türü - MMO Tutkunları PHP Dersleri 2021</title>
</head>
<body>
<?php
/**
 * INTEGER VERİ TÜRÜ
 *
 * Tamsayı değerini alabilir. z = {.., -2, -1, 0, 1, 2, ...}
 * ikilik, sekizlik veya onaltılık tabanları da kullanabilir.
 *
 * Örn;
 * Onluk taban: 124
 * Sekizlik taban: 0174;
 * İkilik taban: 0b01111100;
 * Onaltılık: 0x7C;
 *
 * PHP_INT_MAX - Integer en fazl alabileceği değer.
 */
$onlukTabanda = 124;
echo $onlukTabanda . "<br />";

$sekizlikTabanda = 0174;
echo $sekizlikTabanda . "<br />";

$ikilikTabanda = 0b01111100;
echo $ikilikTabanda . "<br />";

$onaltilikTabanda = 0x7C;
echo $onaltilikTabanda."<br />";

echo "En fazla int değeri alır: ".PHP_INT_MAX."<br />";
echo "En az int değeri alır: ".PHP_INT_MIN."<br />";

echo $onlukTabanda+20 . "<br />";

/**
 * DİĞER VERİ TÜRLERİNDEN INTEGER'A DÖNÜŞÜM
 *
 * Herhangi bir değişkenin önüne (int) veya (integer) yazılır.
 */

$piSayisi = 3.14;
echo var_dump((integer)$piSayisi);

$metin = "5sasd334ds4";
echo var_dump((int)$metin*2); //yazının en başında bulunan 5 sayısını alır.

echo var_dump((int)[]); //boş dizi ise 0 alır.
echo var_dump((int)["MMO Tutkunları", 'Eray']); //Dolu dizi ise 1 alır

echo var_dump((int)true); //1 yazar.
echo var_dump((int) false); //0 yazar.

if (is_integer($onlukTabanda))
    echo "Bu değişken int veri türüdür";
else
    echo "Bu değişken int değil. Değişkenin türü: ".gettype($onlukTabanda);

?>
</body>
</html>