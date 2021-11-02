<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEYİM AYRIMI - TEMEL YAZIM KURALLARI (SYNTAX) - MMO TUTKUNLARI - PHP DERSLERİ 2021</title>
</head>
<body>
<h2>DEYİM AYRIMI - TEMEL YAZIM KURALLARI (SYNTAX) - MMO TUTKUNLARI - PHP DERSLERİ 2021</h2>
<?php
/**
 * DEYİM AYRIMI - TEMEL YAZIM KURALLARI (SYNTAX)
 * PHP'de bir satırı sonlandırırken ';' yazmamız gereklidir
 *
 * PHP etiketi içerisinde yer alan kodların son satırına ';' eklemenize gerek yoktur.
 *
 * Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' in;
 * Bu hatanın anlamı satır sonunda ";" kullanmadığımız içindir.
 */
?>

<?php
echo 'Merhaba Dünya <br />';
echo 'Nasılsınız? <br />'
?>

<?php
 /**
  * KOD BLOKLARINDA DEYİM AYRIMI
  * if, for, switch gibi kod bloğu oluşturan yapılarda "{ }" içerisinde yer alan kodlarda da kullanılır.
  *
  * Parse error: syntax error, unexpected '}', expecting ',' or ';' in
  * Bu hatanın anlamı ise {} kod blogu içerisinde yer alan satırların sonunda ";" kullanmadığımız içindir.
 */
?>

<?php
$kontrol = false;
if ($kontrol)
{
    echo 'If koşulu true<br />';
}
else
{
    echo 'If koşulu false<br />';
}

echo 'Dennemeee<br />';
?>

<?php
/**
 * DEĞİŞKENE ATANAN KOD BLOKLARINDA DEYİM AYRIMI
 * Örnek 1 : anonim fonksiyonlarda deyim ayrımını kod bloğu bittikten sonrada eklenmeli. Örneğin: {};
 * Örnek 2 : Dizi tanımlarken dizinin bitişini simgeleyen "]" sembolünden sonra ";" eklenmelidir.
 */
?>

<?php
$name = function () {
    echo 'Merhaba Eray<br />';
};

echo $name();

$dizi = [
        'ad' => 'Eray',
        'soyad' => 'Öksüz'
];

echo $dizi['ad'];
?>

</body>
</html>