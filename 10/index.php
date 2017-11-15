<?php


function countWord($file)
{
    $word = explode(' ', mb_strtolower($file));
    return count($word);
}

function countUniqueWord($file)
{
    $word = explode(' ', mb_strtolower($file));
    $word2 = array_unique($word);
    return count($word2);
}

function getArrayValue(array $data, $key, $default = null)
{
    return array_key_exists($key, $data) ? $data[$key] : $default;
}

if ($_POST) {
    $file = getArrayValue($_POST, 'comments');
    if (empty($file)) die ('Required parameters are not exist');
    $word = countWord($file);
    $uniqueWord = countUniqueWord($file);
    echo "Numbers of words = {$word}, Numbers of unique words = {$uniqueWord}";
}
include_once "form.php";


