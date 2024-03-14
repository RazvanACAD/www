<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
  
  var_dump($_POST);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">

    <fieldset>

      <legend>Article</legend>

      <div>
        <label for="title">Title</label>: <input type="text" name="title" id="title">
      </div>

      <div>
        <label for="content">Content</label>:
        <textarea autofocus name="content" cols="40" rows="7"></textarea>
      </div>

      <div>
        <label for="lang">Language</label>:
          <select name="lang" id="lang" disabled>
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
          </select>
      </div>

    </fieldset>

    <fieldset>

      <legend>Attributes</legend>
      
      <div>
        <label><input type="checkbox" name="visible" value="yes" id="visible" placeholder="Content">Visible</label>
      </div>
      
    </fieldset>

    <fieldset>

      <legend>Colour</legend>

      <div>
        <p>Colour:</p>
        <input type="radio" name="colour" value="blue" checked id="colour_blue">
        <label for="colour_blue">Blue</label><br>
        <input type="radio" name="colour" value="red" id="colour_red">
        <label for="colour_red">Red</label><br>
        <input type="radio" name="colour" value="green" id="colour_green">
        <label for="colour_green">Green</label>
      </div>

    </fieldset>

    <button>Send</button>

  </form>
</body>
</html>