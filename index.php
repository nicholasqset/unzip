<?php
ini_set('display_errors', true);
$unzip = new ZipArchive;
$out = $unzip->open('www.zip');

if ($out === TRUE) {
  $unzip->extractTo(getcwd());
//  $unzip->extractTo('./');
  $unzip->close();
  echo 'File unzipped';
} else {
  echo 'Something went wrong?';
}

?>