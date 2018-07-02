<?php

session_start();

function errorRedirect($message, $target)
{
    $_SESSION['mesaj'] = $message;
    header("Location: $target");
    die();
}

$dosyaVarMi = array_key_exists('dosya', $_FILES);

if (!$dosyaVarMi) {
    errorRedirect("Dosya yüklemesinde hata : Dosya Bulunamadı", "form.php");
}

$uploadHatasiVarmi = ($_FILES['dosya']['error'] != 0);
if ($uploadHatasiVarmi) {
    errorRedirect("Dosya yüklemesinde hata : Bilinmeyen Hata", "form.php");
}

$uzantiCsvMi = strtolower(substr($_FILES['dosya']['name'], -4)) == ".csv";
if (!$uzantiCsvMi) {
    errorRedirect("Dosya yüklemesinde hata : Geçersiz Dosya", "form.php");
}

$tempPath = $_FILES['dosya']['tmp_name'];
$targetPath = __DIR__ . '/yuklenenler/' . $_FILES['dosya']['name'];


if (move_uploaded_file($tempPath, $targetPath)) {
    errorRedirect("Dosya yüklemesi başarıyla gerçekleşti", "tablo.php?dosya=" . $_FILES['dosya']['name']);
} else {
    errorRedirect("Dosya yüklemesinde hata : Bilinmeyen Hata 2", "form.php");
}
