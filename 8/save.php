<?php

require_once __DIR__ . '/lib.php';
$comments = getArrayValue($_POST, 'comments');

if (empty($comments)) die ('Required parameters are not exist');

$dir = __DIR__ . '/data/comments.txt';
$comments = bad_words($comments);
$comment[] = $comments;

saveComments($dir, $comment);
header("Location: /functions_forms_tasks/8/");
exit;