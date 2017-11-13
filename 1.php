<?php

function isValid()
{
    $check = true;
    if (empty($_POST['first_text']) || empty($_POST['second_text'])) {
        $check = false;
    }
    return $check;
}

function getCommonWords($a, $b)
{
    $result = array_intersect($a, $b);
    return $result;
}

function list_arr($l)
{
    $list = '';
    foreach ($l as $value) {
        $list .= $value . '<br>';
    }
    return $list;
}

if ($_POST) {

    if (isValid() == true) {
        $list_first = explode(" ", $_POST['first_text']);
        $list_second = explode(" ", $_POST['second_text']);
        $s = getCommonWords($list_first, $list_second);
        echo $list = list_arr($s);

    }else echo ('Введите текст во все поля формы');
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
    <textarea name="first_text" placeholder="Ввведите текст"></textarea><br>
    <textarea name="second_text" placeholder="Ввведите текст"></textarea><br>
    <input type="submit" value="Submit">

</form>
</body>
</html>
