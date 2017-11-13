<?php

$hash = $_GET['hash'];
if (empty($hash)) {
    die ('File is not exists');
}
$file = __DIR__ . '/Gallery/' . base64_decode($hash);
$mime = mime_content_type($file);

header("Content-type: {$mime}");
echo file_get_contents($file);
exit;