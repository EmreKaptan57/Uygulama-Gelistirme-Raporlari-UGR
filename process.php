<?php
include('connect.php');
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $task = mysqli_real_escape_string($conn, $_POST["task"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $sqlInsert = "INSERT INTO lists(title , task , type , description) VALUES ('$title','$task','$type', '$description')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Uygulama Başarıyla Eklendi!";
        header("Location:index.php");
    }else{
        die("Bir şeyler yanlış gitti");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $task = mysqli_real_escape_string($conn, $_POST["task"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE lists SET title = '$title', type = '$type', task = '$task', description = '$description' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Uygulama Başarıyla Güncellendi!";
        header("Location:index.php");
    }else{
        die("Bir şeyler yanlış gitti");
    }
}
?>