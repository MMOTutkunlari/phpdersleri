<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP SABİT DEĞİŞKEN ATAMA - MMO TUTKUNLARI PHP DERSLERİ 2021</title>
</head>
<body>
<?php
/**
 * PHP'DE SABİT DEĞİŞKEN ATAMA
 *
 * Sabit değişkenler define() fonksiyonu ile tanımlanır.
 *
 * define("degisken_adi", "deger");
 *
 * degisken_adi
 *
 * Sabit değişken atama kuralları
 *   - Büyük küçük harf duyarlıdır.
 *   - "_" hariç özel karakter kullanılamaz.
 *   - Sayı ile başlanamaz.
 *         - Yanlış kullanım: define("1degisken", "deger");
 *         - Doğru kullanım: define("degisken1", "deger");
 *   - Object veri türünü saklayamaz.
 *   - Öntanımlı sabit değişken isimlerini kullanamayız.
 *   - Daha önce tanımladığınız sabit değişken isimlerini tekrardan kullanamazsınız.
 */

/*define("AD", "Eray");

echo AD;*/

/*define("1FORUM_ADI", "MMO Tutkunları");
echo 1FORUM_ADI; //Parse error: syntax error, unexpected 'FORUM_ADI' (T_STRING), expecting ',' or ';' in*/

//define("TEST_SABIT", new \stdClass()); // Warning: Constants may only evaluate to scalar values, arrays or resources in

/*define("UYE", ['username' => 'Whistle', 'konu_saiyis' => 100]);

echo "<pre>";
echo print_r(UYE);*/

/*define("SAYI", 10);
SAYI += 5; //Parse error: syntax error, unexpected '+=' (T_PLUS_EQUAL) in */

//define("PHP_INT_MAX", 15); // Notice: Constant PHP_INT_MAX already defined in

/*define("DENEME", 10);
define("DENEME", 20); // Notice: Constant DENEME already defined in*/
?>
</body>
</html>