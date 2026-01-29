<?php
$con=mysqli_connect("localhost","root","Bishal@12","crudoperation");
$id=$_GET['updateid'];

$sql="SELECT * FROM crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['sb'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$query="update crud set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";

$execute=mysqli_query($con,$query);
if($execute){
     header("Location: display.php"); // redirect after 
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form  method="post">
  <div class="mb-3">
    <label >Enter name</label>
    <input type="text" class="form-control"placeholder="Enter your name" name="name" value=<?php echo $name?> >
    <label >Enter email</label>
    <input type="email" class="form-control"placeholder="Enter your email"  name="email" value=<?php echo $email?>>
    <label >Enter mobile</label>
    <input type="mobile" class="form-control"placeholder="Enter your mobile"  name="mobile" value=<?php echo $mobile?>>
    <label >Enter password</label>
    <input type="text" class="form-control"placeholder="Enter your password" name="password" value=<?php echo $password?>>
    <input class="btn btn-primary" type="submit" value="Update" name="sb">
    
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>