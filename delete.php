<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM lists WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Uygulama Başarıyla Kaldırıldı!";
    header("Location:index.php");
}else{
    die("Bir şeyler yanlış gitti.");
}
}else{
    echo "Uygulama mevcut değil.";
}
?>