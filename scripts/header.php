<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Blog of Charles Babbage</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<header>
    <h1>The Blog of Charles Babbage</h1>
    <nav>
        <ul>
            <li><a href="../home.php">Home Page</a></li>
            <li><a href="../blog.php">My Blog</a></li>
            <li><a href="../about.php">About Me</a></li>
            <li><a href="../contactus.php">Contact Me</a></li>
            <?
            if (isset($_SESSION['username'])) {
                echo "<li><a href='../create_article.php'>Create Article</a></li>";
                echo "<li><a href='../logout.php'>Logout</a></li>";
            } else {
                echo "<li><a href='../login.php'>Login</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>

