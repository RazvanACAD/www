<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "YMuhbcJRdjj*Ak21";

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error()){
  echo mysqli_connect_error();
  exit;
}

//echo "Connected succesfully";

$sql = "SELECT * FROM article  ORDER BY id;";

$results = mysqli_query($conn,$sql);

if($results===false){
  echo mysqli_error($conn);
}else{
  $articles= mysqli_fetch_all($results,MYSQLI_ASSOC);

}

/*
$name = "Dave";
$hour =11;

$articles = [
  [
    "title"=>"First Post",
    "content"=>"This is the first post"
  ],
  [
    "title"=>"Another Post",
    "content"=>"This is another post"
  ],
  [
    "title"=>"Read This!",
    "content"=>"YOU MUST READ THIS NOW!!!!"
  ],
  [
    "title"=>"Hello!",
    "content"=>"READ THIS NOW!!!!"
  ]
]*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
  </head>
  <body>
    <header>
      <h1>My Blog</h1>
    </header>

    <main>
      <?php if(empty($articles)): ?>
        <p>No articles found</p>
      <?php else: ?>
      <ul>
        <?php foreach ($articles as $article): ?>
          <li>
            <article>
              <h2><?= $article['title'];?></h2>
              <p><?= $article['content'];?></p>
            </article>
          </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </main>
  </body>
</html>


