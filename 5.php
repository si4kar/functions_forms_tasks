<?php

function searchFile ($dir, $fileName)
{
    $folder = scandir($dir);
    $arr = [];
    foreach ($folder as $value) {
        $search = stristr($value, $fileName);
        if ($search != false) $arr[] = $value;

    }
    return $arr;
}

$dir = __DIR__;
$search = searchFile($dir, 'text');
echo '<pre>';
print_r($search);