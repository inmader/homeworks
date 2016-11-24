
<?php


$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post" charset="windows-1251"></textarea><br>

<input type="submit" />
</form>';

echo $form1;

function up_sentence($str)
{
    $arr = str_split($str);
    $str = '';
    $str = '';
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == '.') {
            $arr[$i + 2] = strtoupper($arr[$i + 2]);
        }
        $str .= $arr[$i];
    }
    
}

echo up_sentence($_POST['text1']);


?>