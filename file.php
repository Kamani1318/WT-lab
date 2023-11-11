<?php

$file = 'extras/users.txt';
if(file_exists(($file)))
{
    $handle = fopen($file,'r');
    $content = fread($handle,filesize($file));

    echo $content;
}
else
{
    $handle = fopen($file,'w');
    $content = 'Brad'.'Sara'.PHP_EOL.'Aryan';
    fwrite($handle,$content);
    fclose($handle);
}
?>