<?php

include "include/db.php";
include "include/header.php";
?>
<?php

$kitaplarStatement = $pdo->prepare("SELECT * FROM kitaplar WHERE 1");
$kitaplarStatement->execute();
$data = $kitaplarStatement->fetchAll(PDO::FETCH_ASSOC);


echo '<table>';
foreach ($data as $row) {
    echo '<tr>';
    echo '<td>' . $row['isim'] . '</td>';
    echo '<td>' . $row['yazar'] . '</td>';
    echo '<td>' . $row['basim_yili'] . '</td>';
    echo '<td>' . $row['baski_sayisi'] . '</td>';
    echo '<td>' . $row['yayinevi'] . '</td>';

    echo '</tr>';
}
echo '</table>';
?>


    <div class="row">

    </div>

<?php
include "include/footer.php";