<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP DİZİLER - 3. ÜNİTE - MMO TUTKUNLARI PHP DERSLERİ 2021</title>
</head>
<body>
<?php
/**
 * PHP DİZİLER
 *  - Tek bir değişkende birden fazla farklı veri türlerine ait değerleri sıralı bir biçimde tutmak için kullanılır.
 *
 * Mesela bir öğrencinin bilgilerini değişkenlerde tutsaydık şu şekilde yazmamız gerekirdi;
 *
 * $ad = 'Eray';
 * $soyad = 'Öksüz';
 * $yas = 24;
 * $okul = 'OMU';
 * $bolum = 'Bilgisayar Proğramcılığı';
 *
 * Tüm bilgileri tek bir değişken ile ulaşmak için veya birden fazla öğrencinin bilgilerini tutmak için dizilerden
 * faydalanırız.

 * DİZİ OLUŞTURMA
 * $degisken_adi = []; //boş bir dizi
 * $degisken_adi = array(); //boş bir dizi.
 *
 * Dizi elemanlarını "," işareti ile ayrılır.
 *
 * Örnek dolu dizi tanımlama
 * $degisken_adi = ['Eray', 'Öksüz', 24, 'OMU', 'Bilgisayar Programcılığı']
 *
 * Dizi elemanlarına key değeri girilmemişse 0'dan başlar.
 * $degisken_adi[0] => "Eray" değerini alır.
 *
 * Key ismini değiştirerek dizi tanımlama
 * $degisken_adi = [
 *      'ad' => 'Eray',
 *      'soyad' => 'Öksüz',
  *     'yas' => 24,
 *      'okul' => 'OMU',
 *      'bolum' => 'Bilgisayar Programcılığı'
 * ];
 *
 * $degisken_adi['ad'] // "Eray" değerini alır.
 *
 * DİZİ ELEMANLARININ TAMAMINI EKRANDA GÖSTERMEK
 * print_r() => Dizi elemanlarının tamamını ekranda gösterir.
 * var_dump() => Dizi elemanlarının veri türleri ile beraber ekranda gösterir. Eğer dizi çok büyük ise hepsini göstermez.
 *
 * DİZİ İÇERİSİNDEN ELEMAN SİLMEK *****
 * unset($array['key']) => Dizi içerisinden herhangi bir elemanı unset ile silebiliriz.
 */
?>
</body>
</html>