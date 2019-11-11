<?php
    function hitungHarga($nama, $warna="red"){
        $panjangNama = strlen($nama);
        if ($panjangNama >=1 && $panjangNama <= 10) {
            $hargaTotal = $panjangNama*300;
        } elseif ($panjangNama >=11 && $panjangNama <= 20) {
            $hargaTotal = $panjangNama*500;
        } else {
            $hargaTotal = $panjangNama*700;
        }
        echo "<p style=\"color:$warna\">Nama : $nama<p>";
        echo "<p style=\"color:$warna\">Harga Total : $hargaTotal<p>";
    }
    hitungHarga ($_GET["nama"], $_GET["warna"]);
?>