<?php
include("conn.php");
$id = $_GET['$id'];
$select = mysqli_query($conn,"SELECT * FROM trainer WHERE  id='$id'");
$row = mysqli_fetch_array($select);


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="" method="post">
<input type="text" name="firstname"placeholder="firstname"value="<?php echo $row['firstname']?>"><br><br>
<input type="text" name="secondname"placeholder="secondname"value="<?php echo $row['secondname']?>"><br><br>
<input type="text" name="address"placeholder="address"value="<?php echo $row['address']?>"><br><br>
<input type="password" name="password"placeholder="password"value="<?php echo $row['pasword']?>"><br><br>
<button name="submit">updated</button>


    </form>
 </body>
 </html>
 <?php
 include("conn.php");
 if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $secondname=$_POST['secondname'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $update=mysqli_query($conn,"UPDATE trainer SET `firstname`='$firstname',`secondname`='$secondname',`address`='$address',`password`='$password' WHERE id='$id')");
    if($update){
        echo"updated";
    }
    else{
        echo"not updated";
    }
 }
 ?>