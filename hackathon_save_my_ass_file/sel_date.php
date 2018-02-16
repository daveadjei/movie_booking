<?php
// require 'access.php';

/**
 *We take the id from the browser, and based on the id we give the user the option to select it's day
 *
 */

print_r($_GET);
// Get the id from the URL
// $id= htmlspecialchars($_GET["id"]);
var_dump($id);

// Get the id and time from the Dd in order to compare
// $statement = $dbh->prepare('SELECT id,name,time FROM `movies`');
        // $results = $statement->execute();
?>

<!DOCTYPE html>
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

<form method="get" action="" class="row">

        <!-- The next things (button) are just placeholders. Please delete -->
        <button type="button" class="btn btn-primary">Name</button>

        <?php

// foreach ($results as $mov_id => $name_time){
//         if($mov_id=$id){
//         foreach ($name_time as $name => $time){
//                 echo " <button type="button" class="btn btn-primary">{$name}</button>";
?>
<div >
<select name="name" class="btn">
<?php

//
//                 echo "<option value={$time}>$time</option>";
//         }
// }
?>

<!-- The next things(option1&2) are just placeholders. Please delete -->
<option value="time1">12:00</option>
<option value="time2">16:00</option>

</select>
</div>
</form>
</div>

</body>

</html>