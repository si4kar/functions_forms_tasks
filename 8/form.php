<?php require_once  __DIR__ . '/lib.php'; ?>

    <form action="<?__DIR__ . '/save.php'?>" method="post">

        <textarea name="comments" placeholder="Enter your comments"></textarea> <br>
        <input type="submit" value="Submit">

    </form>


<?php if (file_exists("{$dir}")) : ?>
    <?php $comment = readComments($dir) ?>
    <table>
        <thead>
        <tr>
            <td>№:</td>
            <td>Comment:</td>
        </tr>
        </thead>
        <?php for ($i=0;$i<count($comment);$i++):?>
            <tbody>
            <tr>
                <td><?=$i?></td>
                <td><?=$comment[$i]?></td>
            </tr>
            </tbody>
        <?php endfor; ?>
    </table>
<?php endif; ?>