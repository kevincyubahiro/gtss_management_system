<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="" method="post"auto_completed="off">
      <H2>Registration</H2>
<input type="text" name="firstname"placeholder="firstname"required><br><br>
<input type="text" name="secondname"placeholder="secondname"required><br><br>
<input type="date"name="bod"><br><br><br>
<input type="text" name="address"placeholder="address"required><br><br><br>
<input type="password" name="password"placeholder="password"required><br><br>
<button name="submit">SUBMIT</button>

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
    $insert=mysqli_query($conn,"INSERT INTO trainer VALUES('','$firstname','$secondname','$address','$password')");
    if($insert){
    header("location:insert2.php");
    }
    else{
        echo"no";
    }
 }
 ?>