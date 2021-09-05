<?php

$server_name="localhost";
$username= "root";
$password= "";
$database_name= "diary";

$conn= mysqli_connect($server_name,$username,$password,$database_name);
if (!$conn)
{
    die ("Connection Failed:". mysqli_connect());
}
if(isset($_POST['save']))
{

    $date =$_POST ['date'];
    $memories = $_POST ['memories'];
    
    

$sql_query = "INSERT INTO diary (date, memories)
VALUES ('$date', '$memories')";

if (mysqli_query($conn, $sql_query))

    echo "New memories inserted successfully ! ";
}
else 
{
    echo "Error:" . $sql . "" . mysqli_error($conn);
}





mysqli_close($conn);


?>