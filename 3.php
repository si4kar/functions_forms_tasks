<?php

$file = file_get_contents('./text.txt');
$content = preg_replace ("/^[^a-zA-ZА-Яа-я0-9\s]*$/","",$file);
$list = explode(' ', $content);

$cutFile = $file;

echo '<pre>';
var_dump($file);
var_dump($content);
//var_dump($list);
echo '</pre>';

if ($_POST) {
    foreach ($list as $value) {
        if ((strlen($value)) > $_POST['number']) {
            //echo $value, '<br>';
            $cutFile = str_replace($value, '', $cutFile);
        }
    }
    echo '<pre>';
    $name= preg_replace("/\s{2,}/"," ",$cutFile);
    var_dump($name);
    echo '</pre>';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method= 'post'>
    <input type="number" placeholder="Введите длину слова" name="number"> <br>
     <input type="submit" value="Submit">

</form>
</body>
</html>
