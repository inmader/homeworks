<?php


$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post"></textarea><br>
<input type="submit" />
</form>';

echo $form1;


function top_words($txt){
$arr=explode(" ", $txt);
for ($j=3;$j>0;$j--){
$max_len=strlen($arr[0]);
for ($i=0;$i<count($arr);$i++){	
	if (strlen($arr[$i])>=$max_len){
	 $max_len=strlen($arr[$i]);
     $top=$arr[$i];
		
	}      
	
}
   
  foreach($arr as $key => $value) {
    if ($top == $value) {
        unset($arr[$key]);
    }
}
 print_r($top.'<br>');
 
 }
}

echo top_words($_POST['text1']);


?>

