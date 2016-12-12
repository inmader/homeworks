<?php

$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post"></textarea><br>
<input type="submit" />
</form>';
echo $form1;

$dir2='D:/test/test.txt';

function word_length($dir)
{
    $N=$_POST['text1'];
    $data = file_get_contents($dir);
    $arr = explode(' ', $data);
    $data2 = '';
    foreach ($arr as $key => $value) {

        if (strlen($value) > $N) {
            unset($arr[$key]);

        }
    }
    $data2 = implode(',',$arr);
    file_put_contents($dir,$data2);


}
echo word_length($dir2);
