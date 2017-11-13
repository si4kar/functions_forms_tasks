<?php

function fileList($dir)
{
    $arr = scandir($dir);
    return $arr;
}

$dir = __DIR__;

echo '<pre>';
var_dump(fileList($dir));
echo '</pre>';




