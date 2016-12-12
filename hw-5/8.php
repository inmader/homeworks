<?php

$file = 'D:\test\test.txt';

$forbiden_arr = ['forbiden1','forbiden2'];
$arr_delete = ['.',',','!','/'];

$str = $_POST['commit'];

if (!empty($_POST['name']) and !empty($_POST['commit'])) {

    $arr = explode(' ',$str);
    foreach ($arr as $key => $value ){
        if (in_array($value,$forbiden_arr)){
            echo ('<h1>Uncorect words or symbols!<br></h1>'); // forbidden word

        }
    }

    $arr2 = str_split($str);
    foreach ($arr2 as $key2 => $value2 ){
        if (in_array($value2,$arr_delete)){
            unset($arr2[$key2]);  // delete symbols

        }
    }


    $str = implode('',$arr2);
    $commit = $_POST['name'] . ':' . $str . '<br>';
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
