<?php
$dir = __DIR__ . '/data/comments.txt';

function saveComments($dir, $comment)
{
  file_put_contents("{$dir}", serialize($comment), FILE_APPEND);
}

function readComments($dir)
{
    return unserialize(file_get_contents("{$dir}"));
}

function getArrayValue(array $data, $key, $default = null)
{
    return array_key_exists($key, $data) ? $data[$key] : $default;
}





