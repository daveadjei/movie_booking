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

<?php
class form{
    /**
    * generate a button & select field
    */

    public static function dropdown($results)
    {
//     $html = '<select name="'.$name.'" id="'.$attributes.'">';
//         foreach($options as $value=>$label)
//         {
//             $html .= '<option value="'.$value.' '.($selected==$value ? ' selected': '') .' ">'.$label.'</option>';
//         }
//     $html .= '</select>';
//     return $html;
//     }

    foreach ($results as $mov_id => $name_time){
                if($mov_id=$id){
                foreach ($name_time as $name => $time){
                        echo " <button type="button" class="btn btn-primary">{$name}</button>";
                        echo "<div ><select name="name" class="btn">";
                        echo "<option value={$time}>$time</option>";
                }
        }
        echo "</select></div>";
}
?>

<?php
    echo form::select($results);
    ?>


</form>
</div>

</body>

</html>