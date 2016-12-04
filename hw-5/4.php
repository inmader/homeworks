


function getFilesInDirectory($dir)
{
    $contents = scandir($dir);
    foreach ($contents as $index => $path) {
        if ($path === '.' || $path === '..') {
            unset($contents[$index]);
        }
    }
    return $contents;
}



print_r(getFilesInDirectory($dir));