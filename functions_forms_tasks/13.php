<?php

$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post"></textarea><br>

<input type="submit" />
</form>';

echo $form1;

function count_words($str){
$arr=explode(' ',$str);

$k=array_count_values($arr);

echo '<pre>';
print_r($k);
echo '</pre>';
}

echo count_words($_POST['text1']);
	
?>
