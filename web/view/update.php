<?php
    require "../controller/LoaderController.php";
    global $con;

    $db = new Conect;
    $db->open();

    $inSRT= new Update;
    $query = "SELECT * FROM users";
    $result = mysqli_query($con,$query);
    if(isset($_POST["submit"])){
        $inSRT->UpdateFun();
    } 

    $option='';
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $option .= '<option value="'.$id.'">'.$id.'</option>';
    }
    $tmplt = new Template("../index.php");
    $tmplt->setData(
    [
        "text" => "
        <form action='/view/update.php' method= 'post'>
            <input type='text' name='username' placeholder= 'uživatelské jméno'> <br>
            <input type='password' name='password' placeholder ='heslo'><br>
            <select name='id' id=''> $option </select><br>
            <input class = 'Submit' type='submit' name='submit' value='Odeslat'>
        </form>",
        "DATABASE" =>"EDIT DATA"
    ]
    );
    echo $tmplt->render();


