<?php
    
    require "../controller/LoaderController.php";
    $db = new Conect;
    $db->open();

    $inSRT= new Add;
    
    if(isset($_POST["submit"])){
        $inSRT->Insert();
    }

    $tmplt = new Template("../index.php");
    $tmplt->setData(
    [
        "text" => "
        <form action='/view/add.php' method= 'post'>
            <input type='text' name='username' placeholder= 'uživatelské jméno'> 
            <br>
            <input type='password' name='password' placeholder ='heslo'>
            <br>
            <input class = 'Submit' type='submit' name='submit' value='Odeslat'>
        </form>",
        "DATABASE" => "SAVE DATA to DATABASE"
    ]
    );
    echo $tmplt->render();





