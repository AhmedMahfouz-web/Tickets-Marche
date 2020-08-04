<?php
function get_event_by_name(){
    GLOBAL $conn;    
    $q = "SELECT * FROM events";
    $query = mysqli_query($conn, $q);
    return $query;
}

function get_event_by_id($id){
    GLOBAL $conn;
    $q = "SELECT * FROM events WHERE id = '$id'";
    $query = mysqli_query($conn, $q);
    $result = mysqli_fetch_assoc($query);

    return $result;
}

function update_event($id, $name, $location, $place, $category, $fprice, $tprice, $dfrom, $dto, $image1, $tname1, $image2, $tname2, $folder){
    GLOBAL $conn;
    if($image1 == 5 && $image2 == 5){
        $image1 = $tname1;
        $image2 = $tname2;
    }elseif($image1 != 5 && $image2 == 5 ){
        $image2 = $tname2;
        move_uploaded_file($tname1, $folder . $image1);
    }elseif($image1 == 5 && $image2 != 5 ){
        $image1 = $tname1;
        move_uploaded_file($tname2, $folder . $image2);
    }else{
        move_uploaded_file($tname2, $folder . $image2);
        move_uploaded_file($tname1, $folder . $image1);
    }
    $q = "UPDATE events SET ename = '$name', elocation = '$location', eplace = '$place', ecategory = '$category', pfrom = '$fprice', pto = '$tprice', dfrom = '$dfrom', dto = '$dto', img = '$image1', imgs = '$image2' WHERE id = '$id'";
    $query = mysqli_query($conn, $q);
}

function new_event($name, $location, $place, $category, $fprice, $tprice, $dfrom, $dto, $image1, $tname1, $image2, $tname2, $folder){
    GLOBAL $conn;
    if($image1 == 5 && $image2 == 5){
        $image1 = $tname1;
        $image2 = $tname2;
    }elseif($image1 != 5 && $image2 == 5){
        $image2 = $tname2;
        move_uploaded_file($tname1, $folder . $image1);
    }elseif($image1 == 5 && $image2 != 5){
        $image1 = $tname1;
        move_uploaded_file($tname2, $folder . $image2);
    }else{
        move_uploaded_file($tname2, $folder . $image2);
        move_uploaded_file($tname1, $folder . $image1);
    }
    $q = "INSERT INTO events(ename, elocation, eplace, ecategory, pfrom, pto, dfrom, dto, img, imgs) VALUES ('$name', '$location', '$place', '$category',  '$fprice', '$tprice', '$dfrom', '$dto', '$image1', '$image2')";
    $result = mysqli_query($conn, $q);
}
?>