<?php

$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");
if (!empty($username)){
    if(!empty($password)){
        $host = 'localhost';
        $dbusername = 'root';
        $dbpassword = '';
        $dbname ='';
    
    //Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname)
    if (mysqli_connect_error()){
        die('Connect Error (' .mysqli_connect_errno(). ')'.mysqli_connect_error());
        
    }
    else{
        $sql = "INSERT INTO license (name, date_of_birth, date_of_entry, username, password) values ('name', 'date_of_birth', 'date_of_entry', '$username', '$password')";
        if ($conn->query($sql)) {
            echo "New record is inserted successfully"
        }
        else {
            echo "Error: ". sql ."<br>". $conn->error;
        }
        $conn->close();
    }
    
}
    

?>

