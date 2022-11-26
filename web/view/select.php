<?php
    
    require "../controller/LoaderController.php";
    
    global $con;

    $db = new Conect;
    $db->open();

    $query = "SELECT * FROM users";
    $result = mysqli_query($con,$query);

    $tmplt = new Template("../index.php");
    $tmplt->setData(
    [
        "text" => "
        <div>
        </div>",
        "DATABASE" => "DATA FROM DATABASE"
    ]
    );
    echo $tmplt->render();

    while($row = mysqli_fetch_row($result)){
        echo '<pre>';
        print_r($row);
        echo '</pre>';

    }
?>
