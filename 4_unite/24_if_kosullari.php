<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP IF KOŞULLARI - MMO TUTKUNLARI - PHP DERSLERİ 2021</title>
</head>
<body>
<h1>PHP IF KOŞULLARI  - MMO TUTKUNLARI - PHP DERSLERİ 2021</h1>
<?php
/** IF KOŞULLARI ********************
 * if : Karşılaştırma operatörleri, boolean sonuç veren fonk veya değişkenler ve mantıksal operatörleri
 * kullanarak belirttiğimiz koşullar sonucu true yanıtı alıyorsa kod bloğu içerisinde belirlediğimiz kodlar çalışır.
 *
 * Örnek if koşulu;
 * if(koşul)
 * {
 *      // Koşul true ise burası çalışır.
 * }
 *
 * if-else : Belirttiğimiz koşullar true ise if bloğu içerisindeki kodlar çalışır. False ise else bloğu içerisindeki
 * kodlar çalışır.
 *
 * Örnek if-else koşulu;
 * if(koşul)
 * {
 *      // Koşul true ise burası çalışır.
 * }
 * else
 * {
 *      // Koşul false ise burası çalışır.
 * }
 *
 * if - else if - else : Sıralı bir biçimde belirttiğimiz koşullarda true veriyorsa if ve else if içerisinde yer alan kodlarımız
 * çalışır. Eğer tüm koşullar false ise else çalışır.
 *
 * Örnek if-else if-else koşulu;
 * if (koşul1)
 * {
 *      // Koşul1 true ise burası çalışır.
 * }
 * else if (koşul2)
 * {
 *      // Koşul2 true ise burası çalışır.
 * }
 * else
 * {
 *      // koşul1 ve koşul2 false ise burası çalışır.
 * }
 */

$a = 2;
$b = 5;
$c = 7;

/*if($a < 2)
{
    echo '$a değişkeni 2\'den büyüktür';
}*/

/*if($a >= 5)
    echo '$a değişkeni 5\'den büyük veya eşittir.';
else
    echo '$a degiskeni 5\'den küçüktür.';*/

/*if($a != 2)
{
    echo '$a degiskeni 2\'ye eşittir.';
}
else if($a < $b and $c == 5)
{
    echo '$a degişkeni $b değişkeninden küçüktür.';
}
else
{
    echo 'Hiçbir koşul sağlanamadı';
}*/

/*if($a == 2 or $b > $c)
{
    echo 'koşul sağlandı';
}*/

/*if($a == 2 and $b > $c)
{
    echo 'koşul sağlandı';
}
else
{
    echo 'koşul sağlanmadı';
}*/

/*$metin = '';

if($metin)
{
    echo 'Metin dolu';
}*/

/*$metin2 = '';

if(empty($metin2))
{
    echo 'Metin boş';
}*/

/*$metin3 = '';
if(!$metin3)
{
    echo "Metin boş";
}*/

$dizi = [
        'ad' => 'Eray',
        'soyad' => 'Öksüz'
];

/*if (isset($dizi['yas']))
{
    echo '$dizi değişkeninde yaş tanımlı';
}
else
{
    echo '$dizi değişkeninde yaş tanımlı değil.';
}*/

if(isset($dizi['yas']) && $dizi['yas'] >= 18)
{
    echo 'Reşittir.';
}
else if(isset($dizi['yas']) && $dizi['yas'] < 18)
{
    echo 'Reşit değildir.';
}
else
{
    echo 'Yaş bilgisi alınamadı. :(';
}

?>
</body>
</html>