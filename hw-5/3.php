
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
    $str = '';
    for ($i = 0; $i < count($arr); $i++) {
        if (strlen($arr[$i]) > $N) {
            $str .= $arr[$i] . '<br>';
        }

    }
    echo '<pre>';
    print_r($str);
    echo '</pre>';
}

echo word_length($dir2);