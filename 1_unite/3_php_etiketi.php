<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP ETİKETİ - MMO TUTKUNLARI PHP DERSLERİ 2021</title>
</head>
<body>
<h1>PHP ETİKETİ - MMO TUTKUNLARI - PHP DERSLERİ 2021</h1>
<?php
/**
 * PHP YAZIM KURALLARI (SYNTAX) - PHP ETİKETİ
 *
 * 1. PHP Etiketi Nedir ve Nasıl Kullanılır?
 * PHP kodları html ile iç içe yazılabildiği için hangi aralığın PHP kodlarından oluşacağını belirtmek için
 * PHP etiketlerini kullanırız.
 *
 * PHP Etiketleri şunlardır: <?php ?>
 *
 * <?php : PHP kodlarımıza başlamadan önce yazılır. Bu etiketi yazdıktan sonra PHP kodlarımızı yazabiliriz.
 * ?> : PHP kodlarını yazdıktan sonra kullanılır. PHP kodlarının bittiğini belirtiriz ve yeni bir PHP etiketi açana
 * kadar HTML kodları yazılır.
 *
 * Örnek kullanım;
 *
 * <?php
 * echo 'Merhaba Dünya';
 * ?>
 *
 * 2. KISA PHP ETİKETİ
 * Dinamik web siteleri geliştirirken PHP etiketlerini çok sık kullanacağız. PHP etiketlerini kısa bir şekilde yazmak
 * mümkündür. Kullanımı şu şekildedir: <? ?>
 *
 * Yalnız bu etiketlerin çalışabilmesi için php.ini dosyasından short_open_tag değerini On olarak değiştirmemiz gerekiyor.
 * short_open_tag = On
 *
 * Örnek kullanım;
 * <?
 * echo 'Merhaba Dünya';
 * ?>
 *
 * 3. KISA ECHO PHP ETİKETİ
 * Eğer sadece ekrana yazı yazdıracaksak şu şekilde kullanabiliriz.
 * Örnek: <?= 'Merhaba Dünya'; ?>
 * Uzun hali: <?php echo 'Merhaba Dünya'; ?>
 *
 * 4. PHP Etiketi İle İlgili Bilmeniz Gerekenler
 * Eğer PHP dosyalarımızda html kodu yazmayacaksak PHP etiketini kapatmanıza gerek yoktur.
 * PHP etiketleri içerisinde tekrardan yeni bir PHP etiketi açamazsınız. Her yeni PHP etiketi açmak istediğinizde
 * bir öncekini kapatmak zorundasınız.
 *
 * Örnek yanlış kullanım;
 * <?php
 * <?php
 * ?>
 * ?>
 *
 * Örnek doğru kullanım;
 * <?php
 * ?>
 * <?php
 * ?>
 *
 */

?>
</body>
</html>


