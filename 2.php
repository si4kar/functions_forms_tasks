<?php

function isValid()
{
    if (empty($_POST['first_text'])) {
        return false;
    }
    return true;
}

function longest ($a)
{
    global $one;
    global $two;
    global $three;
    foreach ($a as $value) {
        if ($one < $value) {
            $buff1 = $one;
            $buff2 = $two;
            $one = $value;
            $two = $buff1;
            $three = $buff2;
        }
    }
}

if ($_POST) {

    if (isValid() == true) {
        $list_first = explode(" ", $_POST['first_text']);
      longest ($list_first);
      echo 'Three: ', $three, '<br>';
      echo 'Two: ', $two, '<br>';
      echo 'One: ', $one, '<br>';


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
     <input type="submit" value="Submit">

</form>
</body>
</html>
