<?php

require_once 'bootstrap.php';

$songs = select(null, 0, 'Song');

?>

<a href="create.php">Add New Song</a>

<ul>
    <?php foreach ($songs as $song) : ?>
        <li>
            <strong><?= $song->name ?></strong>
            <br>
            <?= 'by ' . $song->author ?>

           
            <a href="edit.php?id=<?= $song->id ?>">edit</a>
        </li>
    <?php endforeach; ?>
</ul>