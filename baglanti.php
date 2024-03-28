<?php
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "akkayasoftware";

try {
    $baglan = new PDO("mysql:host=$vt_sunucu;dbname=$vt_adi", $vt_kullanici, $vt_sifre);
    // Bağlantı kurulduğunda hata raporlamasını etkinleştir
    $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Veritabanı bağlantısı başarılı.";
} catch(PDOException $e) {
    die("Veritabanı bağlantı işlemi başarısız: " . $e->getMessage());
}
?>
