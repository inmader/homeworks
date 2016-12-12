<?php

$file = 'D:\test\test.txt';

$forbiden_arr = ['.',',','!','/' ,'forbiden'];

if (!empty($_POST['name']) and !empty($_POST['commit'])) {

    $arr = explode(' ',$_POST['commit']);
    foreach ($arr as $key => $value ){
        if (in_array($value,$forbiden_arr)){
            echo ('<h1>Uncorect words or symbols!<br></h1>'); // forbidden word
            $html='';
        }
    }
    $_POST['commit'] = implode(' ',$arr);
    var_dump($_POST['commit']);
    $commit = $_POST['name'] . ':' . $_POST['commit'] . '<br>';
    file_put_contents($file, $commit, FILE_APPEND);

    $data=file_get_contents($file);
    echo $data;

}
else{
    echo ('<h1>Wrong information!<br></h1>');

}

if (!in_array($value,$forbiden_arr)) {
    $html = '<br>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="name"><br>
        <textarea cols="100" rows="10" name="commit" method="post"></textarea><br>
        <input type="submit" value="Add">
    </form>';
    echo $html;
}
