<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Veri Türleri - MMO Tutkunları PHP Dersleri 2021</title>
</head>
<body>
<?php
/**
 * PHP'de veri türleri
 *
 * boolean (bool): TRUE (1), FALSE(0)
 * integer (int): 5, 10, 15
 * float / double: 5.2, 5.004
 * string: 'Merhaba Dünya' , "Merhaba MMO Tutkunları"
 *
 * array: ['Eray', "MMO Tutkunları", 5, 5.2, ["Forum", "Konular"]]
 * object: new \stdClass , new MMOTutkunlari(), (object) array
 * callable: Çağrılabilen fonksiyonlar
 * iterable: Yinelenebilirler (PHP 7.1)
 *
 * Özel türler;
 * NULL: Hiçbir şey atanmamış.
 * resource: Kaynağa gönderim içeren özel değişkenler. fopen();
 *
 * Bir değişkenin veri türünü öğrenmek için gettype($str) fonksiyonunu kullanırız. Eğer değişkenimiz
 * object, array ise içerisindeki değerlerin türünü öğrenmek için var_dump($str) fonksiyonunu kullanırız.
 */

$kontrol = true;
echo gettype($kontrol)."<br />";
echo var_dump($kontrol)."<br />";

$tamSayi = 20;
echo $tamSayi . " : " . gettype($tamSayi)."<br />";

$piSayisi = 3.14;
echo gettype($piSayisi)."<br />";

$metin = 'Merhaba Dünya';
echo gettype($metin)."<br />";

$dizi = ["Eray", 'MMO Tutkunları', 20, 3.14];
echo gettype($dizi)."<br />";
echo var_dump($dizi);

$obj = new \stdClass;
$obj->name = "Eray";
$obj->yas = 23;
echo gettype($obj)."<br />";
echo var_dump($obj);

$degisken = NULL;
echo gettype($degisken)."<br />";

function test(callable $f)
{
    echo $f();
}

test(function () {
    echo "Merhaba Dünya<br />";
});

function test2(iterable $iter)
{
    foreach ($iter as $value)
    {
        echo $value."<br />";
    }
}

test2([5, 1, 2]);

$dosya = fopen("a.txt", "w+");
echo get_resource_type($dosya);

?>
</body>
</html>