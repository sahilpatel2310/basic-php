<?php
    include 'config.php';
    $id = $_REQUEST['id'];
    $delete = "DELETE FROM try1 WHERE id = $id";
    $result = $conn -> query($delete);

    if($result == true){
        header('location:fetch.php');
    }else{
        echo "Data Delete Failed";
    }
?>