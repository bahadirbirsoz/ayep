<?php
session_start();
$dosya = $_GET['dosya'];
$path = __DIR__ . '/yuklenenler/' . $dosya;
$dosyaVarMi = file_exists($path);
if (!$dosyaVarMi) {
    $_SESSION['mesaj'] = "Dosya bulunamadı";
    header("Location: liste.php");
    die;
}

$icerik = file_get_contents($path);
$satirlar = explode("\n", $icerik);

if (array_key_exists("mesaj", $_SESSION)) {
    echo '<p>' . $_SESSION['mesaj'] . '</p>';
    unset($_SESSION['mesaj']);
}

echo '<table>';
foreach ($satirlar as $key => $satir) {
    echo '<tr>';
    $degerler = explode(",", $satir);
    foreach ($degerler as $deger) {
        if ($key)
            echo '<td>' . $deger . '</td>';
        else
            echo '<th>' . $deger . '</th>';
    }
    echo '</tr>';
}
echo '</table>';




