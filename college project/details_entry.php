<?php
$servername = "localhost";
$username = "root";
$password="";
$database_name="database123";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $Username =$_POST['Username'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    $sql_query = "INSERT INTO entry_details (Username,Email,Subject,Message)
    VALUES('$Username','$Email','$Subject','$Message')";

    if(mysqli_query($conn, $sql_query))
    {
      echo "New Details Entry Inserted Successfully !";
    }
    else
    {
      echo "Error:" . $sql. "" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>