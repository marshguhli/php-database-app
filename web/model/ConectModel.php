<?php

    class Conect{
        
        public function open(){
            global $con;
            $con = mysqli_connect("sql6.webzdarma.cz","snazimsebytc5753","Zimlovi21$","snazimsebytc5753");
            if ($con == false) {
                die("Unable to connect to database.");
            }
            mysqli_query($con, "SET CHARACTER SET UTF8");
        }
        public function close(){
            if ($con) {
                mysqli_close($con);
            }
        }
       
        
    }