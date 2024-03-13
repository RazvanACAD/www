<?php
// Loops

$articles=[
  'a'=>"First",
  'b'=>"Second",
  'c'=>"Read this!"
];

foreach($articles as $index=>$article){
  echo $index.' - '.$article, ", ";
}