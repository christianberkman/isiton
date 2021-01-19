<?php
/*
  is it on
  Add platform script
*/
require 'common.inc.php';

printHeading('Remove Platform');

// Arguments
$platformName = strip_tags($argv[1] ?? NULL);

if(empty($platformName)){
  printError('Incorrect number of arguments given');
  printLine();
  printLine("Usage:\t php remove-platform.php [name]");
  exit;
}

// Read platforms.json
$platforms = readJson('platforms.json');

// Find platform to remove
for ($i=0; $i < count($platforms) ; $i++) {
  if($platforms[$i]['name'] == $platformName){
    unset($platforms[$i]);
    printLine("Platform {$platformName} successfully deleted");
    printLine();
    break;
  }
}

// Write platforms.json
writeJson('platforms.json', $platforms);

printLine('Changes written to platforms.json');

exit;
?>
