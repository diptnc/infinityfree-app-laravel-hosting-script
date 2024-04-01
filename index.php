<?php
$zipUrl = "https://codeload.github.com/archieve-url-from-github";
$zipFile = "my-zip.zip";

// Download the ZIP file
file_put_contents($zipFile, fopen($zipUrl, 'r'));
// Get the current working directory
$extractDir = getcwd() . '/extract-here';

// Create the directory if it doesn't exist
if (!file_exists($extractDir)) {
    mkdir($extractDir, 0777, true);
}

// Extract the ZIP file
$zip = new ZipArchive;
$res = $zip->open($zipFile);
if ($res === TRUE) {
    $zip->extractTo($extractDir);
    $zip->close();
    echo "done";
} else {
    echo "hello";
}
