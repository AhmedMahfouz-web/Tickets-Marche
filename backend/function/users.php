<?php
function insert_user($un, $fn, $ln, $pass, $up){
    GLOBAL $conn;
    $q = "INSERT INTO users (user_name, first_name, last_name, user_password, user_permission) VALUES ('$un', '$fn', '$ln', '$pass', '$up')";
    $query = mysqli_query($conn, $q);
}

function get_user_by_name($un){
    GLOBAL $conn;
    $q = "SELECT count(user_id) AS result FROM users WHERE user_name = '$un'";
    $result = mysqli_query($conn, $q);
    $numofusers = mysqli_fetch_assoc($result);
    // $numofusers = mysqli_num_rows($result);
    $nou = $numofusers["result"];
    return $nou;
}

function get_password_by_name($un){
    GLOBAL $conn;
    $q = "SELECT user_password FROM users WHERE user_name = '$un'";
    $query = mysqli_query($conn, $q);
    $result = mysqli_fetch_assoc($query);
    $pass = $result["user_password"];
    
    return $pass;
}

function is_logged_in($request_from = "other"){
    if($request_from == "sign-in"){
        if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
            header("Location: event-list.php");
        }
    }else{
        if(!isset($_SESSION['username']) || $_SESSION['username'] == ""){
            $_SESSION['request'] = $request_from;
            header('Location: signin.php');
        }
    }
}
?>