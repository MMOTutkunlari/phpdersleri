<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Boolean Veri Türü - MMO Tutkunları PHP Dersleri 2021</title>
</head>
<body>
<?php
/**
 * PHP BOOLEAN VERİ TÜRÜ
 *
 * TRUE(1), FALSE(0)
 * Not: True veya false yazarken büyük küçük duyarlılığı yoktur.
 */
$kontrol = true;
if ($kontrol)
{
    echo '$kontrol değişkenimin değeri true';
}
else
{
    echo '$kontrol değişkenimin değeri false';
}

/**
 * DİĞER VERİ TÜRLERİNİ BOOLEAN'A ÇEVİRMEK
 *
 * (bool) veya (boolean) sözcükleri herhangi bir değişkenin önüne eklerseniz boolean veri türüne çevrilir.
 *
 * Aşağıdaki değerler direkt false olarak algılanır.
 * integer : 0
 * float/double: 0.0
 * string: '' / ""
 * elamanı olmayan array: [] / array();
 * NULL
 *
 * Not: Sadece 0 false olarak algılanır. Eğer -li sayılar varsa true değerini alır.
 */
echo var_dump((bool) 5); //TRUE yazdırır.
echo var_dump((bool) -5); //TRUE yazdırır.
echo var_dump((bool) 0); //FALSE yazdırır.
echo var_dump((bool) 3.14); //TRUE yazdırır.
echo var_dump((bool) -5.56); //TRUE yazdırır.
echo var_dump((bool) 0.0); //FALSE yazdırır.
echo var_dump((bool) []); //FALSE yazdırır.
echo var_dump((bool) ["Eray", 'MMO Tutkunları']); //TRUE yazdırır.
echo var_dump((bool) ""); //FALSE yazdırır.
echo var_dump((bool) 'Eray'); //TRUE yazdırır.
echo var_dump((bool) NULL); //FALSE yazdırır.

?>
</body>
</html>