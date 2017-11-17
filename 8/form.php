<?php require_once  __DIR__ . '/lib.php'; ?>


<?php if (file_exists("{$dir}")) : ?>
<table>
    <thead>
    <tr>
        <td>№:</td>
        <td>Comment:</td>
    </tr>
    </thead>

    <tbody>
    <?php foreach (readDirectory($dir)  as $key => $file) : ?>
    <?php $comment = readSerializeFile($file, $dir); ?>

    <tr>
        <td><? echo ($key-1); ?></td>
        <td><?= nl2br((getArrayValue($comment, 'comments'))) ?></td>
    </tr>
    </tbody>

    <?php endforeach; ?>
    <?php endif;  ?>
</table>

<form action="<?= $action ?>" method="post">

    <input type="text" name="comments" placeholder="Enter your comments"> <br>
    <input type="submit" value="Submit">

</form>
