<?php

class Add{
    public function Insert (){

        global $con;
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(!$username && !$password){

            echo "Zkuste to prosím znovu.";
        }
    
        $query = "INSERT INTO users(user,password) VALUES ('$username','$password')";
    
        $result = mysqli_query($con,$query);
    
        die (header("refresh: 1;"));
    }
}