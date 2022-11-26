<?php
class Delete{
    public function Delete(){
        global $con;
        $id = $_POST["id"];
    
        $query2 = "DELETE FROM users WHERE id =$id";
    
        $result2 = mysqli_query($con,$query2);
    
        if(!$query2){
            die("selhalo");
        }
    }
}