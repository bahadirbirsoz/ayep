<?php
session_start();

if (isset($_SESSION['user'])) {
    $user = USER::find($_SESSION['user']);
}
$uploadedFile = new UploadedFile ('../../ornek_metin.txt');
if ($uploadedFile->hasAccess($user)) {
    $uploadedFile->render();
} else {
    $response->send(401);
}

