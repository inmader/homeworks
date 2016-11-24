<?php

$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post"></textarea><br>

<input type="submit" />
</form>';

echo $form1;

function reverse_string($str){
$arr=explode(".", $str);
krsort($arr);
$str2='';
foreach ($arr as $k){
  $str2 .= $k.'.'.' ';
}

print_r($str2);

}

echo reverse_string($_POST['text1']);

?>