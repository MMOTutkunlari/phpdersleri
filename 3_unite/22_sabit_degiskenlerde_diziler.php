<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SABİT DEĞİŞKENLERDE DİZİLER - MMO TUTKUNLARI - PHP DERSLERİ 2021</title>
</head>
<body>
<h1>SABİT DEĞİŞKENLERDE DİZİLER - MMO TUTKUNLARI - PHP DERSLERİ 2021</h1>
<?php
/**
 * SABİT DEĞİŞKENLERDE DİZİLER
 * define("DEGISKEN_ADI", [...]); şeklinde tanımlanır.
 *
 * Ekrana yazdırmak için;
 * DEGISKEN_ADI[key];
 * 
 * Sabit değişkenlere atanan değerler sonradan değiştirilemez veya silinemez. 
 */
?>

<?php
define("OGRENCI", ['Eray', 'Öksüz', 24, 'OMU', 'Bilgisayar Programcılığı']);

//echo OGRENCI; // Notice: Array to string conversion in
echo "<pre>";
print_r(OGRENCI);

//OGRENCI[0] = 'Eray2'; //Fatal error: Cannot use temporary expression in write context in - sabit olduğu için değiştirilemez.
//echo OGRENCI[0] . " " . OGRENCI[1];

//unset(OGRENCI[2]); // Fatal error: Cannot use temporary expression in write context in - sabit olduğu için silinemez.

define("OGRENCI2", [
   'ad' => 'Eray',
   'soyad' => 'Öksüz',
   'yas' => 24,
   'okul' => 'OMU',
   'bolum' => 'Bilgisayar Programcılığı'
]);

print_r(OGRENCI2);

define("OGRENCI3", [
    'ad' => 'Eray',
    'soyad' => 'Öksüz',
    'yas' => 24,
    'okul' => 'OMU',
    'bolum' => 'Bilgisayar Programcılığı',
    'dersler' => [
            'Veritabanı', 'İnternet Programcılığı'
    ]
]);

print_r(OGRENCI3);
?>
</body>
</html>