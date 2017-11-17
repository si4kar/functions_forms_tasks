<?php

require_once __DIR__ . '/lib.php';

$file = getArrayValue($_GET, 'file');
$dir = __DIR__ . '/DATA';
//getUniqueFileName($dir, 'txt');
$content = serialize($_POST);

if (empty($content)) {
    die ('Required parameters are not exist');
}
$file = saveToFile($content, $dir, $file);
header("Location: /functions_forms_tasks/7/");
exit;
?>