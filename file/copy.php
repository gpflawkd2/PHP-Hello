<?php

$file = 'wiki.txt';
$newfile = 'wikicopy.txt';
 
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
} else {
    echo 'success file copy';
}

?>