<?php

$text = 'b васька слушает да ест. b воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

function transform($string)
{
    $sentence= explode('. ', $string);
    foreach ($sentence as $value){
    $value = ucfirst($value);
    echo $value;
    }
    echo '<pre>';
    print_r($sentence);
    echo '</pre>';
}
transform($text);


