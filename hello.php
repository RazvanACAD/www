<?php

// Arrays

/*
$articles=[
  1=>"First post",  
  3=>"Second post",
  "Read this!"
];

$articles=[
  "first"=>"First post",  
  "second"=>"Second post",
  "third"=>"Read this!"
];
// echo $articles; - error
var_dump($articles["second"]);

$count=3;
$price=6.99;
$values=[
  "message"=>"Hello World!",
  "count"=>150,
  "pi"=>3.14,
  "status"=>true,
  "result"=>null
];
$values1=[$count,$price];

var_dump($values);*/

$articles=[
  ["title"=>"First post", "content"=>"This is the first post"],
  ["title"=>"Second post", "content"=>"This is the second post"],
  ["title"=>"Read this!", "content"=>"You must read this article!"]
];

var_dump($articles[1]["title"]);