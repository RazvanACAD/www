<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
<div class="container">
    <header>
        <h1>My blog</h1>
    </header>

    <nav>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="/www/">Home</a></li>

            <?php if (Auth::isLoggedIn()) : ?>
                
                <li class="nav-item"><a class="nav-link" href="/www/admin">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="/www/logout.php">Log out</a></li>

            <?php else : ?>
                
                <li class="nav-item"><a class="nav-link" href="/www/login.php">Log in</a></li>

            <?php endif; ?>

            <li class="nav-item"><a class="nav-link" href="/www/contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
