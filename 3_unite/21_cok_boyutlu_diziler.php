<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ÇOK BOYUTLU DİZİLER - MMO TUTKUNLARI - PHP DERSLERİ 2021</title>
</head>
<body>
<h1>PHP ÇOK BOYUTLU DİZİLER - MMO TUTKUNLARI - PHP DERSLERİ 2021</h1>
<?php
/**
 * PHP ÇOK BOYUTLU DİZİLER
 * Dizi içerisine tanımlanan verilerden herhangi birinin veri türü dizi ise çok boyutlu dizidir.
 *
 * Örn;
 * $degisken_adi = [
 *      'deger1',
 *      'deger2',
 *      [..]
 * ];
 *
 * Örn2;
 * $degisken_adi = [
 *      'key1' => 'value1',
 *      'key2' => 'value2',
 *      'key3' => [...]
 * ];
 */
?>

<?php
$ogrenci = [
    'ad' => 'Eray',
    'soyad' => 'Öksüz',
    'yas' => 24,
    'okul' => 'OMU',
    'bolum' => 'Bilgisayar Programcılığı',
    'dersler' => [
            'İnternet Programcılığı', 'Ağ Temelleri', 'Veritabanı', 'Nesne Yönelimli Programlama'
    ]
];

echo "<pre>";
//print_r($ogrenci);
//var_dump($ogrenci);

//echo $ogrenci['dersler']; //Notice: Array to string conversion in
//print_r($ogrenci['dersler']);

//echo $ogrenci['dersler'];
/*unset($ogrenci['dersler'][2]);
print_r($ogrenci);*/

//echo count($ogrenci['dersler']); //dizi içerisindeki elemanların sayısını verir.

/*$ogrenci['dersler'][1] = 'Nesne Yönelimli Programlama';
print_r($ogrenci);*/

/*
Merhaba Ad Soyad, Yaşınız: yas
Okulunuz: okul
Bölüm: bölüm
Dersler:
    * ders1
    * ders2
 */

echo "Merhaba " . $ogrenci['ad'] . " " . $ogrenci['soyad'] . ", yaşınız: " . $ogrenci['yas'] . "<br />";
echo "Okulunuz: " . $ogrenci['okul'] . "<br />";
echo "Bölüm " . $ogrenci['bolum'] . "<br />";
echo "Dersler: <ul>";
foreach ($ogrenci['dersler'] as $ders) {
    echo "<li>$ders</li>";
}
echo "</ul>";
?>


</body>
</html>