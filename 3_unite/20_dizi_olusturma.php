<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP DİZİ OLUŞTURMA - MMO TUTKUNLARI - PHP DERSLERİ 2021</title>
</head>
<body>
<h1>PHP DİZİ OLUŞTURMA - MMO TUTKUNLARI - PHP DERSLERİ 2021</h1>
<?php
/**
 * PHP DİZİ OLUŞTURMA
 *
 * PHP'de dizileri oluşturmak için array() veya "[]" karakterlerini kullanırız.
 * Örnek boş bir bir dizi
 * $degisken_adi = array();
 * $degisken_adi = [];
 *
 * Örnek dolu bir dizi
 * Son eleman hariç dizilere eklediğimiz elemanları "," işareti ile ayırırız.
 * Örn;
 * $degisken_adi = ['Eray', 'Öksüz', 24, 'OMU', 'Bilgisayar Programcılığı'];
 *
 * DİZİLERİ EKRANA YAZDIRMAK *******
 * Oluşturduğumuz diziyi ekrana yazdırabilmek için şu iki fonksiyonu kullanırız
 * print_r() => Dizi elemanlarının tamamını ekranda gösterir.
 * var_dump() => Dizi elemanlarının veri türleri ile beraber ekranda gösterir. Eğer dizi elemanları çok fazla ise hepsini göstermez.
 *
 * DİZİ İÇERİSİNDEN ELEMAN SİLMEK *****
 * unset($array['key']) => Dizi içerisinden herhangi bir elemanı unset ile silebiliriz.
 *
 * DİZİ ELEMANLARINI EKRANA YAZDIRMAK ***********
 * Dizi içerisindeki herhangi bir elemanı ekrana yazdırmak için $degisken_adi['anahtar_degeri'] girilir.
 * Dizi oluştururken herhangi bir key değeri atamamışsanız elemanlar 0'dan başlayarak isimlendirilir.
 * $degisken_adi[0] => Ekrana 'Eray' yazar.
 *
 * ANAHTAR DEĞERİNİ DEĞİŞTİREREK DİZİ OLUŞTURMAK ************
 * Varsayılan dizilerde elemanların anahtar kelimesi 0'dan başlayarak birer birer artar.
 * Dizi elemanlarında tuttuğumuz verilerin ne işe yaradığını belirtmek için anahtar değerini değiştirebiliriz.
 * Dizilerde elemanın key adını değiştirmek için => işaretini kullanırız.
 *
 * Örn;
 * $degisken_adi = [
 *      'ad'    => 'Eray',
 *      'soyad' => 'Öksüz',
 *      'yas'   => 24,
 *      'okul'  => 'OMU',
 *      'bolum' => 'Bilgisayar Programcılığı'
 * ];
 */
?>

<?php
$ogrenci = ['Eray', 'Öksüz', 24, 'OMU', 'Bilgisayar Programcılığı'];
//echo $ogrenci; //Notice: Array to string conversion in

echo "<pre>";
print_r($ogrenci);

//var_dump($ogrenci);
//echo $ogrenci[0] . " " . $ogrenci[1];

//dizi elemanlarını sonradan değiştirmek
/*$ogrenci[0] = 'Eray2';
print_r($ogrenci);*/

/*unset($ogrenci[2]);
$ogrenci = array_values($ogrenci); //anahtar değerleri tekrardan belirlenir.
print_r($ogrenci);*/

$ogrenci2 = [
    'ad' => 'Eray',
    'soyad' => 'Öksüz',
    'yas' => 24,
    'okul' => 'OMU',
    'bolum' => 'Bilgisayar Programcılığı'
];

print_r($ogrenci2);
//echo $ogrenci2["ad"]; //Notice: Undefined offset: 0 dizide olmayan elemanı alınca çıkar bu.

/*  Merhaba Ad Soyad, Yaşınız: yas
    Okulunuz: Okul
    Bölümünüz: bölüm
 */
echo "Merhaba " . $ogrenci2['ad'] . " " . $ogrenci2['soyad'] . ", Yaşınız: " . $ogrenci2['yas'] . "<br />";
echo "Okulunuz: " . $ogrenci2['okul'] . "<br />";
echo "Bölümünüz: " . $ogrenci2['bolum'] . "<br />";
?>
</body>
</html>