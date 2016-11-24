<?php


$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post"></textarea><br>
<textarea cols="100" rows="10" name="text2" method="post"></textarea><br>
<input type="submit" />
</form>';

echo $form1;

function getCommonWords($a, $b){
	$arr1 = explode(" ", $a);
	$arr2 = explode(" ", $b);
  $word_arr='';
	for ($i=0;$i<count($arr1);$i++){
		foreach ($arr2 as $k){
	if ($arr1[$i] == $k){
	     $word_arr .= $arr1[$i].'<br>';
	  }
     }
   }
   	echo ('<pre>');
    print_r($word_arr);
    echo ('</pre>');
}

echo getCommonWords($_POST['text1'], $_POST['text2']);

?>