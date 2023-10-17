<?php
$dir = ".";
$exclude = ['node_modules'];  // Directories to exclude
$files = array_diff(scandir($dir), array_merge(['.', '..'], $exclude));
foreach ($files as $file) {
    echo '<a href="'.$file.'">'.$file.'</a><br>';
}
?>
