<?php
session_start();


if (array_key_exists("mesaj", $_SESSION)) {
    echo '<p>' . $_SESSION['mesaj'] . '</p>';
    unset($_SESSION['mesaj']);
}

?>
<html>
<head><title>Dosya yükleme</title>
    <meta charset="utf-8">
</head>
<body>
<form enctype="multipart/form-data" action="yukle.php" method="POST">
    <input type="file" name="dosya">
    <input type="submit" value="Yukle">
</form>
</body>
</html>