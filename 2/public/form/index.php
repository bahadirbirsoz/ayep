<?php
if ($_FILES) {
    echo '<pre>';
    print_r($_FILES);

    foreach ($_FILES as $inputName => $arr) {
        if (!$arr['error']) {
            move_uploaded_file(
                $arr['tmp_name'],
                '../../upload/' . $arr["name"]
            );
        }
    }
    echo '</pre>';
}


?>

<form action="" method="POST" enctype="multipart/form-data">
    <input name="hdn" type="hidden" value="test">
    <p>
        <input name="dosya" type="file">
        <input name="ikinci" type="file">
        <input name="ucuncu" type="file">
    </p>
    <p>
        <input type="submit" value="GÖNDER">
    </p>
</form>
