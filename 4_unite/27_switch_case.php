<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP SWITCH-CASE | MMO TUTKUNLARI | PHP DERSLERİ 2021</title>
</head>
<body>
<h1>PHP SWITCH-CASE | MMO TUTKUNLARI | PHP DERSLERİ 2021</h1>
<?php
/**
 * SWITCH - CASE ****************
 * İf koşulu ile tekrarlanan kontrolleri daha kolay gerçekleştirmek için kullanılır.
 * Örneğin bir değişken eşit olduğu değere göre işlem yapılacaksa case kullanmak daha uygundur. İf koşullarını daha
 * karışık karşılaştırma işlemlerinde kullanırız.
 *
 * case : Her biri bir if koşuludur.
 * default: case ile belirtilen değerlerin hiçbirine uymazsa çalışır.
 *
 * switch($degisken) {
 *      case 'deger1':
 *          ...
 *          break;
 *      case 'deger2':
 *          ...
 *          break;
 *      case 'deger3:
 *          ...
 *          break;
 *      default:
 *          ($degisken != deger1, deger2 ve deger3) burası çalışır.
 * }
 */

$sayi = 10;

switch ($sayi) {
    case $sayi < 5:
        echo '$sayi 5\'den büyüktür.<br />';
        break;

    case $sayi == 10:
        echo '$sayi 10\'a eşittir.<br />';
        break;

    default:
        echo 'Koşullar sağlanamadı.';
}

?>
</body>
</html>