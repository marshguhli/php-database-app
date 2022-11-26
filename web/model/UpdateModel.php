<?php
class Update{
    public function UpdateFun(){
        global $con;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];
    
        $query2 = "UPDATE users SET user='$username' , 
        password= '$password' WHERE id=$id";
    
        $result2 = mysqli_query($con,$query2);
    
        if(!$result2){
            die("selhalo");
        }
    }
}