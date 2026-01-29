<?php
$con = mysqli_connect("localhost","root","Bishal@12","crudoperation");

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM crud WHERE id=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        header("Location: display.php"); // redirect after delete
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>
