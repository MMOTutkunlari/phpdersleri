<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP KOŞULLU İFADELER EKSTRA SYNTAX | MMO TUTKUNLARI | PHP DERSLERİ 2021</title>
</head>
<body>
<h1>PHP KOŞULLU İFADELER EKSTRA SYNTAX | MMO TUTKUNLARI | PHP DERSLERİ 2021</h1>
<?php
/**
 * if / if - else / if - else if - else ve switch-case için ekstra sözdizimi mevcuttur.
 *
 * İf koşulu için örnek
 * if(kosul):
 *      ....
 * endif;
 *
 * if - else için örnek;
 * if(kosul):
 *      ....
 * else:
 *      ....
 * endif;
 *
 * if - else if - else için örnek
 * if(kosul):
 *      ....
 * elseif(kosul2):
 *      ....
 * else:
 *      ....
 * endif;
 *
 * switch için örnek;
 *
 * switch($degisken):
 * case 'kosul':
 *      ....
 * endswitch;
 */
?>

<?php
$a = 8;
 ?>
<h2>if örnek</h2>
<?php if($a == 5): ?>
<p>$a değişkeni 5'e eşit.</p>
<?php endif; ?>

<h2>if - else örnek</h2>
<?php if ($a > 5): ?>
<p>$a değişkeni 5'den büyüktür.</p>
<?php else: ?>
<p>$a değişkeni 5'den büyük değildir.</p>
<?php endif; ?>

<h2>if - elseif - else örnek</h2>
<?php if ($a != 5): ?>
<p>$a değişkeni 5'e eşit değildir.</p>
<?php elseif ($a > 6): ?>
<p>$a değişkeni 6'dan küçüktür.</p>
<?php else: ?>
<p>koşullar sağlanamadı.</p>
<?php endif; ?>

<h2>Switch Örnek</h2>
<?php switch($a): ?>
<?php case 5: ?>
    <p>$a değişkeni 5'e eşit.</p>
    <?php break; ?>
<?php case 6: ?>
    <p>$a değişkeni 6'ya eşit.</p>
    <?php break; ?>
<?php default: ?>
    <p>Switch - case koşulları sağlanmadı.</p>
<?php endswitch; ?>
</body>
</html>