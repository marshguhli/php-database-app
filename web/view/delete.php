<?php
   
    require "../controller/LoaderController.php";
    global $con;

    $db = new Conect;
    $db->open();

    $inSRT= new Delete;
    $query = "SELECT * FROM users";
    $result = mysqli_query($con,$query);
    
    if(isset($_POST["submit"])){
        $inSRT->Delete();
    } 

    $option='';
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $option .= '<option value="'.$id.'">'.$id.'</option>';
    }

    $tmplt = new Template("../index.php");
    $tmplt->setData(
    [
        "text" => "<p>Vyber id</p>
        <form action='/view/delete.php' method= 'post'>
            <select name='id' id=''>$option</select><br>
            <input class = 'Submit' type='submit' name='submit' value='Odeslat'> 
        </form>",
        "DATABASE" =>"REMOVE DATA"
    ]
    );
    echo $tmplt->render();



