<?php
/*
  is it option
  Scripts Common
*/

// Die if not running from CLI
function CLIorDie(){
  if(!isset($_SERVER['SHELL'])) die("config.php should be called from shell");
}

// Define data folder
define('DATA_FOLDER', '../public/data/');


//
// JSON functions
//
function readJson(string $jsonFile){
  $jsonPath = DATA_FOLDER . $jsonFile;
  if(!is_file($jsonPath)) return [];
  $jsonContents = file_get_contents($jsonPath);
  $jsonArray = json_decode($jsonContents, TRUE);
  return $jsonArray;
}

function writeJson(string $jsonFile, array $array = []){
  $jsonPath = DATA_FOLDER . $jsonFile;
  $jsonContents = json_encode($array, JSON_PRETTY_PRINT);
  if(!$jsonContents){ printError('Could not encode new JSON file'); exit;}
  $fileHandler = fopen($jsonPath, 'w+');
    fwrite($fileHandler, $jsonContents);
  fclose($fileHandler);

  return TRUE;
}


//
// CLI Output Functions
//
//===== Helper Functions =====//
function printLine(string $string = NULL, $eol = TRUE){
  print ' ' . $string;
  if($eol) print PHP_EOL;
}

function printHR(){
  print '=================================================='. PHP_EOL;
}

function printHeading(string $lineTwo = NULL){
  printHR();
  printLine('is it on', TRUE);
  if(isset($lineTwo)) printLine($lineTwo, TRUE);
  printHR();
  printLine();
}

function printError(string $string = NULL, $eol = TRUE){
  printLine("!! {$string}", $eol);
}


?>
