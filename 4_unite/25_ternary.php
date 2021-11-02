<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Ternary (Üçlü) Operatör Kullanımı - MMO TUTKUNLARI - PHP DERSLERİ 2021</title>
</head>
<body>
<h1>PHP Ternary (Üçlü) Operatör Kullanımı - MMO TUTKUNLARI - PHP DERSLERİ 2021</h1>
<?php
/**
 * Basit if-else koşullarını tek satırda yazabilmek için kullanılırız.
 *
 * Örnek bir if else koşulu;
 * if(kosul)
 * {
 *      //true ise burasi calisir;
 * }
 * else
 * {
 *      //false ise burası calisir;
 * }
 *
 * Örnek Ternary kullanımı;
 * (kosul) ? 'true ise burası çalışır' : 'false ise burası çalışır';
 */

$a = 5;
$b = 4;
/*if($a == 5)
{
    echo '$a değişkeni 5\'e eşit.';
}
else
{
    echo '$a değişkeni 5\'e eşit değil.';
}*/

echo ($a == 5) ? '$a değişkeni 5\'e eşit.<br />' : '$a değişkeni 5\'e eşit değil.<br />';
echo ($a == 5 && $a < $b) ? '$a değişkeni 5\'e eşit ve $a > $b\'den.' : 'Koşul sağlanamadı.';
?>
</body>
</html>