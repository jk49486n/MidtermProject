<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "IceCreamShop");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$flavor = mysqli_real_escape_string($link, $_GET['flavor']);
$scoops = mysqli_real_escape_string($link, $_GET['scoops']);
 
// attempt insert query execution
$sql = "INSERT INTO sales (flavor, scoops) VALUES ('$flavor', '$scoops')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>