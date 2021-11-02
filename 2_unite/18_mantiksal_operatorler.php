<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP MANTIKSAL OPERATÖRLER - MMO TUTKUNLARI PHP DERSLERİ 2021</title>
</head>
<body>
<?php
/**
 * PHP MANTIKSAL OPERATÖRLER
 * Koşullarımızı daha komplike hale getirmek için mantıksal operatörleri kullanırız.
 *
 *  - Mantıksal Operatörler
 *      AND (&&) => VE  : Hepsi doğru ise true
 *      OR (||) => VEYA : Herhangi bir tanesi doğru ise true
 *      !   => değil : Değil ise true
 *      XOR => Özel veya : Herhangi biri doğru ise doğru, hepsi doğru veya yanlış ise yanlış.
 *
 *  AND (&&)
 *  0 0 => 0
 *  0 1 => 0
 *  1 0 => 0
 *  1 1 => 1
 *
 *  OR (||)
 *  0 0 => 0
 *  0 1 => 1
 *  1 0 => 1
 *  1 1 => 1
 *
 * ! (Değil)
 *  0 => 1
 *  1 => 0
 *
 * XOR
 *  0 0 => 0
 *  0 1 => 1
 *  1 0 => 1
 *  1 1 => 0
 */

$a = 5;
$b = 7;
$c = 4;

/*if ($a == 5 && $b < 8)
{
    echo '$a 5\'e eşit ve $b 8\'den küçüktür.<br />';
}
else
{
    echo 'koşul başarısız.<br />';
}*/

/*if ($a == 5 || $b > 8)
{
    echo 'koşul sağlandı.';
}
else
{
    echo 'koşul sağlanmadı.';
}*/

/*if (!($a == 5))
{
    echo '3. koşul sağlandı.';
}
else
{
    echo '3. koşul sağlanmadı.';
}*/

/*if ($a == 5 xor $b < 8)
{
    echo '4. koşul sağlandı.';
}
else
{
    echo '4. koşul sağlanmadı.';
}*/

?>
</body>
</html>