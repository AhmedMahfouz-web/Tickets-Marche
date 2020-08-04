<?php 

    require_once("function/all.php");

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $query = "DELETE FROM events WHERE id = '$id'";
        mysqli_query($conn, $query);
        header("Location: index.php");

    } else {
        header("Location: index.php");

    }

?>