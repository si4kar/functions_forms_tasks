<?php

require_once __DIR__ . '/lib.php';

$file = getArrayValue($_GET, 'file');
$dir = __DIR__ . '/DATA';
//getUniqueFileName($dir, 'txt');
$content = ($_POST['comments']);

if (empty($content)) {
    die ('Required parameters are not exist');
}


$badWords = ['дурак', 'придурок', 'дебил'];

$checkComment = explode(' ', $content);
$stop_word = array_intersect($checkComment, $badWords);

if ($stop_word) {
    echo 'Слова ' . implode(",", $stop_word) . ' запрещены';
}

else {
    $content = serialize($_POST);

    $file = saveToFile($content, $dir, $file);
    header("Location: /functions_forms_tasks/8/");
    exit;
}

?>