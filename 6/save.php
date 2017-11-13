<?php

$allowed = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
$file = $_FILES['image'];

if (!in_array($file['type'], $allowed)) {
    die("Type {$file['type']} is not allowed");
}
$dir = __DIR__ . '/Gallery';
move_uploaded_file($file['tmp_name'], "{$dir}/{$file['name']}");

header("Location: /functions_forms_tasks/6/");
exit;