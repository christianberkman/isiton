<?php
//
// Determine ISP by hostname
//

// Get ISP hostname
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ispHost = getIspHost($hostname);

// Get ISPs from config
$config = json_decode(file_get_contents('data/config.json'), TRUE);



// Encode JSON file
$jsonArray =
[
  'name' => 'unkown',
  'title' => 'Unkown',
  'host' => $ispHost
];

echo json_encode($jsonArray);
exit;

//
// Functions
//

// Isolate ISP from hostname
function getIspHost(string $hostname){
  $parts = explode('.', $hostname);
  if(count($parts) <= 3) $host = $hostname;
  else{
    $lastIndex = count($parts) - 1;
    $host = join(
      '.',
      [
        $parts[$lastIndex-2],
        $parts[$lastIndex-1],
        $parts[$lastIndex]
      ]
      );
  }

  return $host;
}

?>
