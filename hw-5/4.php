$form1 = '<form name="myform" method="post">
<textarea cols="100" rows="10" name="text1" method="post"></textarea><br>
<input type="submit" />
</form>';
echo $form1;

$dir2=$_POST['text1'];


function getFilesInDirectory($dir)
{
    $contents = scandir($dir);
    foreach ($contents as $index => $path) {
        if ($path === '.' || $path === '..') {
            unset($contents[$index]);
        }
    }

    echo ('<pre>');
    print_r($contents);
    echo ('</pre>');
}



print_r(getFilesInDirectory($dir2));
