<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Null Birleştirme Operatörü (??) - MMO TUTKUNLARI - PHP DERSLERİ 2021</title>
</head>
<body>
<h1>PHP Null Birleştirme Operatörü (??) - MMO TUTKUNLARI - PHP DERSLERİ 2021</h1>
<?php

/**
 * Bir değişkenin null değer alıp almadığını koşullar ile kontrol etmek için ?? operatörünü kullanırız.
 *
 * Örnek bir if else koşulu;
 * if(is_null($degisken))
 * {
 *      //$değişken null ise burası çalışır.;
 * }
 * else
 * {
 *      //$degisken null değil ise burası çalışır.;
 * }
 *
 * Örnek ?? kullanımı;
 * ($degisken) ?? '$degisken null ise burası calisir';
 */

$degisken = "Merhaba MMO Tutkunları izleyicileri. Umarım PHP dersleri sizin için faydalı olmuştur. :)";

$degisken2 = ($degisken) ?? '$degisken nulldur.';

echo $degisken2;

?>
</body>
</html>