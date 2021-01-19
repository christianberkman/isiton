<?php
/*
  is it on
  Sort config script
*/
require 'common.inc.php';
CLIorDie();

printHeading('Sort Platforms');


// Sort By
$sortBy = (strtolower($argv[1] ?? 'title'));
switch($sortBy){
  default:
  case 'title':
    $sortByFunction = 'sortByTitle';
  break;
  case 'position':
    $sortByFunction = 'sortByPosition';
  break;
}

// Read json
$platforms = readJson('platforms.json');

// Sort Platforms
  usort($platforms, $sortByFunction);

// Write json
writeJson('platforms.json', $platforms);

printLine("Platforms sorted by {$sortBy}");

//
// Functions
//

function sortByTitle($a, $b){
  return strcasecmp($a['title'], $b['title']);
}

function sortByPosition($a, $b){
  if( $a['position'] < $b['position']) return -1;
  if($a['position'] == $b['position']) return 0;
  else return 1;
}



?>
