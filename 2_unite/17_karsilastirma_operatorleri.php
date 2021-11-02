<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP KARŞILAŞTIRMA OPERATÖRLERİ - MMO TUTKUNLARI PHP DERSLERİ 2021</title>
</head>
<body>
<?php
/**
 * PHP KARŞILAŞTIRMA OPERATÖRLERİ
 * Değişkenlerin tuttuğu değerleri karşılaştırmak için kullanılır.
 * Yazacağımız programda kurduğumuz algoritmayı gerçekleştirebilmek için if koşullarında sıklıklı bu karşılaştırma
 * operatörlerini kullanacağız.
 *
 *      $a == $b => Eşittir
 *      $a != $b => Eşit değildir.
 *      $a <> $b => eşit değildir.
 *      $a === $b => Aynı değer ve aynı veri türünde ise
 *      $a !== $b => Aynı tür ve aynı değere sahip değilse
 *      $a < $b => küçüktür.
 *      $a > $b => büyüktür.
 *      $a <= $b => küçük eşittir.
 *      $a >= $b => büyük eşittir.
 *      $a <=> $b => Mekik
 */

/*$a = 10;
$b = 11;*/

/*echo var_dump($a == $b); // 10 == 10 : true
if ($a == $b)
    echo '$a ve $b eşittir.';
else
    echo '$a ve $b eşit değildir.';*/

/*echo var_dump($a != $b); // 10 != 11 : false
if ($a != $b)
{
    echo '$a ve $b eşit değiltir.';
}
else
    echo '$a ve $b eşittir.';*/

//echo var_dump($a <> $b); // 10 <> 10 : true  | 10 <> 10 : false

/*$c = true;
$d = true;

//echo var_dump($c === $d); // true === 1 : false / 1 === 1 : true
//echo var_dump($c !== $d); // true !== true : false / true !== 1 : true*/

/*$a = 20;
$b = 21;*/

//echo var_dump($a < $b); // 20 < 25 : true / 20 < 12 : false / 20 < 20 false
//echo var_dump($a <= $b); // 20 <= 20 : true / 21 <= 20 : false / 19 <= 20 : true
//echo var_dump($a > $b); //21 > 20 : true / 19 > 20 : false
//echo var_dump($a >= $b);// 21 >= 20 : true / 20 >= 20 : true / 20 >= 21 : false

/*$a = 20;
$b = 21;

echo var_dump($a <=> $b);
    // 20 <=> 20 : 0
    // 21 <=> 20 : 1
    // 20 <=> 21 : -1*/

?>
</body>
</html>