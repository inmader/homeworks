<?php


$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post"></textarea><br>

<input type="submit" />
</form>';

echo $form1;

function unique_word($str){

    $arr = array_unique(explode(" ", $str));
    $count = 0;
    foreach ($arr as $k) {
        $count++;
    }
    print_r($count);
}

echo unique_word($_POST['text1']);



?>
