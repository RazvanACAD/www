<!DOCTYPE html>
<html>
<head>
    <title>Article Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <div class="container">

        <header>
            <h1>Article Test</h1>
        </header>

        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="/www/">Home</a></li>

                <?php if (Auth::isLoggedIn()) : ?>
                    
                    <li class="nav-item"><a class="nav-link" href="/www/admin/">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/www/logout.php">Log out</a></li>
                    <li class="nav-item"><a class="nav-link" href="/www/admin/category-page.php">Categories</a></li>

                <?php else : ?>
                    
                    <li class="nav-item"><a class="nav-link" href="/www/login.php">Log in</a></li>
                    <li class="nav-item"><a class="nav-link" href="/www/register.php">Register</a></li>
                <?php endif; ?>

                <li class="nav-item"><a class="nav-link" href="/www/contact.php">Contact</a></li>
            </ul>
        </nav>

        <main>
