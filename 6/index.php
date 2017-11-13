<?php

$files = scandir(__DIR__ . '/Gallery');
$images = array_filter($files, function ($file) {
    return !in_array($file, ['.', '..']);
});
?>

<form action="/functions_forms_tasks/6/save.php" method="post" enctype="multipart/form-data">
    <input type="file" name = image>
    <input type="submit" name="Submit">
</form>

<?php foreach ($images as $image): ?>

  <table border = 1 width="30%">
    <tr>
       <td>
           <img src="/functions_forms_tasks/6/image.php?hash=<?= base64_encode($image) ?>" width="300">
       </td>
   </tr>
  </table>
<?php endforeach; ?>