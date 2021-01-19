<?php

$unsorted = [
  [
    "n" => 1,
    "title" => "Facebook"
  ],
  [
    "n" => 2,
    "title" => "Instagram"
  ],
  [
    "n" => 10,
    "title" => "Alibaba"
  ],
  [
    "n" => 3,
    "title" => "WhatsApp"
  ]
];

echo "unsorted --- ";
display($unsorted);
echo "<br />";

echo "by title --- ";
display( sortByTitle($unsorted));
echo "<br />";

echo "by N --- ";
display( sortByN($unsorted));
echo "<br />";


function display(array $array){
  foreach($array as $index){
    echo $index['title'] ." : ";
  }
}


function sortByTitle(array $array){
  function cmp($a, $b){
    return strcmp($a['title'], $b['title']);
  }

 usort($array, 'cmp');
 return $array;
}

function sortByN(array $array){
  function cmpN($a, $b){
    if($a['n'] == $b['n']) return 0;
    if($a['n'] < $b['n']) return -1;
    if($a['n'] > $b['n']) return 1;
  }

  usort($array, 'cmpN');
  return $array;
}



 ?>
