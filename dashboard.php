<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$fullname = $_SESSION['fullname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Book Exchange System</title>

<style>

body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f4f4f4;
}

header{
    background:#0f3969;
    color:white;
    text-align:center;
    padding:15px;
}

nav{
    background:#0e3c68;
    padding:15px;
    text-align:center;
}

nav a{
    color:white;
    text-decoration:none;
    margin:20px;
    font-weight:bold;
}

nav a:hover{
    color:yellow;
}

.container{
    width:90%;
    margin:auto;
    text-align:center;
    padding-top:40px;
}

h2{
    color:#0f3969;
}

.cards{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:25px;
    margin-top:40px;
}

.card{

    width:220px;
    background:white;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
    padding:25px;

}

.card h3{
    color:#0f3969;
}

.card p{
    color:#555;
}

.card button{

    background:#27ae60;
    color:white;
    border:none;
    padding:10px 20px;
    border-radius:5px;
    cursor:pointer;
    font-size:15px;

}

.card button:hover{

    background:#1f8c4c;

}

footer{

    background:#133b70;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:60px;

}

</style>

</head>

<body>

<header>

<h1>Book Exchange System</h1>

<p>Welcome to Your Dashboard</p>

</header>

<nav>

<a href="dashboard.html">Dashboard</a>

<a href="addbook.html">Add Book</a>

<a href="books.html">Books</a>

<a href="profile.html">Profile</a>

<a href="logout.html">Logout</a>

</nav>

<div class="container">

<h2>Welcome User 👋</h2>

<p>Select an option below to continue.</p>

<div class="cards">

<div class="card">

<h3>📚 Add Book</h3>

<p>Upload books that you want to exchange.</p>

<button onclick="location.href='addbook.html'">

Add Book

</button>

</div>

<div class="card">

<h3>📖 View Books</h3>

<p>Browse books uploaded by other users.</p>

<button onclick="location.href='books.html'">

View Books

</button>

</div>

<div class="card">

<h3>📩 My Requests</h3>

<p>View your exchange requests.</p>

<button onclick="location.href='requests.html'">

Requests

</button>

</div>

<div class="card">

<h3>👤 Profile</h3>

<p>View and update your profile.</p>

<button onclick="location.href='profile.html'">

Profile













</button>

</div>

</div>

</div>

<footer>

<p>© 2026 Book Exchange System</p>

</footer>

</body>
</html>