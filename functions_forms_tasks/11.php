<?php


$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post" charset="windows-1251"></textarea><br>
<input type="submit" />
</form>';
echo $form1;

function up_sentence($str)
{
    $arr = str_split($str);

    $str2='';
    foreach ($arr as $key => $value) {
        if ($arr[$key] == '.') {

            $arr[$key+2] = strtoupper($arr[$key + 2]);
        }elseif ($key==0){
            $arr[$key]=strtoupper($arr[$key]);
        }
        $str2 .= $arr[$key];

    }

    echo ('<pre>');
    print_r($str2);
    echo ('<pre>');

}
echo up_sentence($_POST['text1']);
