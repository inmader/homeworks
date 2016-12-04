<?php

$file = 'book.txt';

if (!empty($_POST['name']) and !empty($_POST['commit'])) {
    $commit = $_POST['name'] . ':' . $_POST['commit'] . '<br>';
    file_put_contents($file, $commit, FILE_APPEND);

}else{
    header('Location: /info.php'); // message about wrong information
}


$data=file_get_contents($file);
echo $data;

$html = '<br>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="name"><br>
        <input type="text" name="commit"><br>
        <input type="submit" value="Add">
    </form>';
echo $html;
