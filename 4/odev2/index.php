<?php

class User
{
    public function tarihGoster()
    {
        return date("d.m.Y H:i", strtotime($this->tarih));
    }
}

$dsn = 'mysql:dbname=ayep;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}


$sql = "SELECT * FROM ornek";

$sth = $dbh->prepare($sql);
$sth->execute(array());

/*
echo '<table>';
echo '<thead><tr>';

echo '<th>ID</th>';
echo '<th>Email</th>';
echo '<th>Telefon</th>';
echo '<th>Şehir</th>';
echo '<th>Tarih</th>';
echo '<th>Tutar</th>';

echo '</tr></thead>';
foreach ($yellow as $row) {
    echo '<tr>';

    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['telefon'] . '</td>';
    echo '<td>' . $row['sehir'] . '</td>';
    echo '<td>' . $row['tarih'] . '</td>';
    echo '<td>' . $row['tutar'] . '</td>';

    echo '</tr>';
}
echo '</table>';
*/

?>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Sehir</th>
        <th>Tarih</th>
        <th>Tutar</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($satir = $sth->fetchObject('User')): ?>
        <tr>
            <td><?= $satir->id ?></td>
            <td><?= $satir->email ?></td>
            <td><?= $satir->telefon ?></td>
            <td><?= $satir->sehir ?></td>
            <td><?= $satir->tarihGoster() ?></td>
            <td><?= $satir->tutar ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>

