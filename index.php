

<html>
<head>
    <style>
    fieldset {

    background-color: seagreen;
    width: 500px;
    padding: 50px;
    color: white;
    margin: auto; 
    }
    input {
    width: 100%;
    margin-bottom: 20px;
}
</style>
</head>
<body>

<form action="index.php" method="post">
    
    <fieldset>

    <legend>User Details</Legend>

    <label>id:</label><br>
    <input type="number" name="id" required><br>


    <label>Name:</label><br>
    <input type="text" name="Name" required><br>

    <label>Phone Number:</label><br>
    <input type="number" name="phone" required><br>

    <input type="submit" name="sub">

</fieldset>
</body>  
</html>




<?php
$host="localhost";
$user="root";
$pass="";
$db="login";
$port=3307;
$conn=new mysqli($host,$user,$pass,$db,$port);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
echo "connected successfully"."<br>";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id=$_POST["id"];
    $name=$_POST["Name"];
    $phone=$_POST["phone"];
    $sql="insert into user(id,user_name,phone) values 
    ('$id','$name','$phone')";
        if($conn->query($sql)==TRUE)
        {
        echo "data entered successfully";
        }
        else{
            echo "error".$conn->error;
        }
    $conn->close();


}





?>