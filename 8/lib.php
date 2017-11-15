<?php
$dir = __DIR__ . '/data/comments.txt';

define('MAT',['bad','worse','ugly']);

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
function bad_words($comments){
    foreach ($comments as $key=>$value){
        $comments[$key]=strip_tags(str_replace(MAT, '***', $value,$count),'<b>');
        if($count>0){
            echo 'Некорректный комментарий. - '.$value ."<br>";
        }
    }
    return $comments;
}