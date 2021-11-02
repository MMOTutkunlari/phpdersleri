<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Değişken Tanımlama - MMO Tutkunları PHP Dersleri 2021</title>
</head>
<body>
<?php
/**
 * Değişken nedir?
 * Herhangi bir veritüründeki değerleri isim vererek hafızada tutabilmek için kullanılır. Değişkenler sayesinde
 * hafızada tuttuğumuz verileri erişebilir ve değişiklik yapabiliriz.
 *
 * PHP'de değişken tanımlaması.
 * PHP'de değişken tanımlarken $ işaretini ekledikten sonra değişkenin adını yazmalıyız. Örneğin;
 *
 * $degisken_adi = deger;
 *
 * Çoğu programlama dilinin aksine PHP'de değişken tanımlarken veritipi belirtmemize gerek yoktur.
 * Eklediğimiz değerin veritürünü otomatik olarak algılayacaktır.
 *
 * Değişken atama kuralları;
 *  - Büyük küçük harf duyarlıdır. $ad , $Ad
 *  - Türkçe karakter ve " _ " hariç özel karakter kullanımı yasaktır.
 *      - Türkçe karakterler: üÜ öÖ ıİ şŞ çÇ ğĞ
 *      - Özel karakterlere örnekler: /=?-
 *  - Değişkenler sayı ile başlayamaz.
 *      - Örnek yanlış kullanım: $1degisken
 *      - Örnek doğru kullanım: $degisken1 , $d1
 *  - PHP'de öntanımlı değişken isimlerini değişkenlerimizde kullanamayız.
 *      - Örn: $this, $_SERVER vs.
 */

/*$ilk_degisken = "Merhaba Dünya<br />";
$ilkDegisken = "Merhaba MMO Tutkunları izleyicileri<br />";

echo $ilkDegisken;*/

/*$sayi = 10;
echo $sayi = $sayi + 5; //$sayi += 5;*/

//ilkDegisken = "Merhaba Dünya"; yanlış kullanım
//$1degisken = 5; yanlış kullanım

//$this = 5;

?>
</body>
</html>