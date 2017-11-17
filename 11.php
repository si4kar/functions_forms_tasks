//Программа не работает с кирилицей

<?php

$text = 'fdg. ewdf. dfsf';

function transform($string)
{
    $sentence= explode('. ', $string);
    $result = '';
    foreach ($sentence as $value){
    $result .= ucfirst($value) . ' ';
    }
    return $result;
}
$result = transform($text);

echo $result;


