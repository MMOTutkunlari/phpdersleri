<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MMO Tutkunları PHP Eğitim 2021 - Açıklama Satırları</title>
</head>
<body>
<?php
    /**
     * Açıklamalar nedir?
     * İlerleyen günlerde kodlarımızı ne işe yaradığını öğrenmek için bıraktığımız açıklama satırlarıdır.
     * Bu açıklama satırları php yorumlayıcısı tarafından göz ardı edilir.
     *
     * Açıklama Türü    Kapsadığı Alan
     *      //              Satırı yorum satırına dönüştürür.
     *      / *  * /        Belirlenen aralığı komple yorum satırına dönüştürür.
     *      #               Satırı yorum satırına dönüştürür.
     */

    //echo "Merhaba Eray";s
    echo "Merhaba Eray 2<br />"; // Ekrana Merhaba yazdırır. echo "Deneme 1";

    #echo "Merhaba MMO Tutkunları izleyicileri";
    echo "Merhaba MMO Tutkunları izleyicileri 2<br />"; # echo "Merhaba MMO Tutkunları..."

    /*for($i = 1; $i <= 20; $i++)
    {
        echo $i."<br />";
    }*/

	// PHP Doc Kullanım örnekleri
    /**
     * Parametre ile gönderilen değeri ekrana Merhaba $name olarak yazdırır.
     *
     * @param string $name
     * @return string
     */
    function setName($name)
    {
        return "Merhabaaaaa $name<br />";
    }

    echo setName("Eray");

    /**
     * Class Deneme
     */
    class Deneme
    {
        /** @var string */
        public $name;

        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return string
         */
        public function ekranaYazdir()
        {
            return "Merhaba ". $this->name . "<br />";
        }
    }

    $deneme = new Deneme;
    $deneme->setName("MMO Tutkunları");
    echo $deneme->ekranaYazdir();

?>
</body>
</html>