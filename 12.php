<?php

$text = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь.';
echo $text, '<br>';

$text=explode('.',$text);
$text = array_filter($text);
krsort($text);


foreach ($text as $value){
    echo $value.'.';
}