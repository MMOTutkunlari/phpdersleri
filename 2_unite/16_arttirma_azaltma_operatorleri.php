<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ARTTIRMA VE AZALTMA OPERATÖRLERİ - MMO TUTKUNLARI PHP DERS 2021</title>
</head>
<body>
<?php
/**
 * PHP ARTTIRMA VE AZALTMA OPERATÖRLERİ
 *
 *      ++$variable => değişkenin değerini bir arttırır ve sonra döndürür.
 *      --$variable => değişkenin değerini bir azaltır ve sonra döndürür.
 *      $variable++ => değişkeni döndürür sonra bir arttırır.
 *      $variable-- => değişkeni döndürür sonra bir eksiltir.
 */

$a = 50;
//echo ++$a; // ekrana 51 yazdırır.
//echo --$a; //ekrana 49 yazdırır.

/*echo $a++;
echo "<br />";
echo $a;*/

/*echo $a--;
echo "<br />";
echo $a;*/

for($i = 1; $i <= 100; $i++)
{
    echo $i."<br />";
}

?>
</body>
</html>