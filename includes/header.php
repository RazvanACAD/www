<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>

            <?php if (Auth::isLoggedIn()) : ?>
                
                <li><a href="/admin/">Admin</a></li>
                <li><a href="/logout.php">Log out</a></li>

            <?php else : ?>
                
                <li><a href="/login.php">Log in</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <main>
