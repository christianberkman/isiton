<?php
/*
  is it on
  Print platforms
*/
require 'common.inc.php';

printHeading('Print Platforms');

// Read platforms.json
$platforms = readJson('platforms.json');

// Print platforms
foreach($platforms as $platform){
  printLine("Name:\t\t{$platform['name']}");
  printLine("Title:\t\t{$platform['title']}");
  printLine("URL:\t\t{$platform['url']}");
  printLine("Position:\t{$platform['position']}");
  printLine();
}

exit;
?>
