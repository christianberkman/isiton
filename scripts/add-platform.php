<?php
/*
  is it on
  Add platform script
*/
require 'common.inc.php';

printHeading('Add Platform');

// Arguments
$platformName = strip_tags($argv[1] ?? NULL);
$platformTitle = strip_tags($argv[2] ?? NULL);
$platformURL = strip_tags($argv[3] ?? NULL);
$platformPos = intval($argv[4] ?? 999);

if(empty($platformName) || empty($platformTitle) || empty($platformURL)){
  printError('Incorrect number of arguments given');
  printLine();
  printLine("Usage:\t php add-platform.php [name] [title] [url]");
  exit;
}

// Print platform to add
printLine("Name:\t\t{$platformName}");
printLine("Title:\t\t{$platformTitle}");
printLine("URL:\t\t{$platformURL}");
printLine("Position:\t{$platformPos}");
printLine();

// Read platforms.json
$platforms = readJson('platforms.json');

// Add new Platform
$platforms[] = [
    'name' => $platformName,
    'title' => $platformTitle,
    'url' => $platformURL,
    'position' => $platformPos
  ];

// Write platforms.json
writeJson('platforms.json', $platforms);

printLine('Platform has been added to platforms.json');

exit;
?>
