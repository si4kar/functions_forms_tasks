<?php

function reverse($file)
{
    return strrev($file);
    }

function getArrayValue(array $data, $key, $default = null)
{
    return array_key_exists($key, $data) ? $data[$key] : $default;
}

if ($_POST) {
    $file = getArrayValue($_POST, 'comments');
    if (empty($file)) die ('Required parameters are not exist');
    echo $file, ' => ', reverse($file);

}

include_once "form.php";
