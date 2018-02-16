<?php
// Initialization part

ini_set('error_reporting', 1);

$dbh = new PDO('mysql:host=localhost;dbname=cinema', 'root', 'rootroot');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//var_dump($_POST);

echo "<pre>";

print_r($_REQUEST);


// DIE();
$id     = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);
$name   = filter_input(INPUT_POST, 'name');
$date   = filter_input(INPUT_POST, 'date');
$time = filter_input(INPUT_POST, 'time',FILTER_VALIDATE_INT);
$duration = filter_input(INPUT_POST, 'duration',FILTER_VALIDATE_INT);
$description = filter_input(INPUT_POST, 'description');
var_dump($id);

$statement = $dbh->prepare('SELECT * FROM `movies`');
        $result = $statement->execute();
        // var_dump($result);
$statement = $dbh->prepare('INSERT INTO movies (id,name,date,time,duration,description) VALUES (?,?,?,?,?,?)');
$result = $statement->execute([$id,$name,$date,$time,$duration,$description]);
var_dump($result);
var_dump($name);
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Movie_Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
        <!-- <script src="main.js"></script> -->
    </head>

    <body>


        <h1>Movie Booking for Geeks</h1>

        <form method="post" action="">
            <br> Movie
            <select name="name">
                <option >Sing</option>
                <option>Hannibal</option>
                <option>Black Panther</option>
                <option>Ice Age</option>
                <option>Fithy Shades of Grey</option>
                <option>Boss Baby</option>
                <option>Early Man</option>
                <option>Game Night</option>
                <option>50 Shades of Grey</option>
                <option>Jumanji: Welcome to the Jungle</option>
                <option>Avengers :infinity War</option>
                <option>Doctor Strange</option>
            </select>

            <br> Date
            <input type="date" name="date" value="date">
            <br> Time
            <input type="text" name="time">
            <br> Duration
            <input type="number" name="duration">
            <br> Description
            <input type="text" name="description">
            <!-- <br> Date of Birth
            <input type="date" name="date">
            <br> Seat Number
            <input type="number" name="num">
            <br>
            <hr>
            <h1> Guest</h1>
            <br> Name
            <input type="text" name="gname">
            <br> Email
            <input type="email" name="email">
            <br> Mobile
            <input type="number" name="mno">
            <br> -->
            <hr>
            <input type="submit" name="submit" value="save">Show me the money!</input>


        </form>
    </body>

    </html>