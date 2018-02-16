<?php
// Initialization part

ini_set('error_reporting', 1);

require access.php;

//var_dump($_POST);

echo "<pre>";

// print_r($_REQUEST);


// DIE();
// $id     = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);
// $name   = filter_input(INPUT_POST, 'name');
// $date   = filter_input(INPUT_POST, 'date');
// $time = filter_input(INPUT_POST, 'time',FILTER_VALIDATE_INT);
// $duration = filter_input(INPUT_POST, 'duration',FILTER_VALIDATE_INT);
// $description = filter_input(INPUT_POST, 'description');
// var_dump($id);

// $statement = $dbh->prepare('SELECT * FROM `movies`');
//         $result = $statement->execute();
//         // var_dump($result);
// $statement = $dbh->prepare('INSERT INTO movies (id,name,date,time,duration,description) VALUES (?,?,?,?,?,?)');
// $result = $statement->execute([$id,$name,$date,$time,$duration,$description]);
// var_dump($result);
// var_dump($name);
?>
!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>

<body>

<div class="container">
<img class="master_image" src="./img/Hugo_Movie_Stills_Bookstore_1_-_Mr_Labisse-8064.jpg"
        style="opacity: 0.6;" width="100%">

        <h1>Movie Booking for Geeks</h1>

        <form method="get" action="" class="row">
            <br> Movie
            <select name="name">
                <option>Sing</option>
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

            <hr>
            <input type="submit" name="submit" value="save">Show me the money!</input>

        </form>

<?php
// foreach ($results as $mov_id => $name_time){
//         if($mov_id=$id){
//         foreach ($name_time as $name => $time){
//                 echo " <button type="button" class="btn btn-primary">{$name}</button>";
?>
<?php

//
//                 echo "<option value={$time}>$time</option>";
//         }
// }
?>


</body>

</html>