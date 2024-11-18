<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Styling */
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Add responsiveness */
        @media (max-width: 480px) {
            form {
                padding: 20px;
            }

            input, button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <form action="" method="post" autocomplete="off">
        <h2>Login</h2>
        <input type="text" name="firstname" placeholder="First Name" required><br>
        <input type="text" name="secondname" placeholder="Second Name" required><br>
        <input type="text" name="address" placeholder="Address" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button name="submit">Submit</button>
        <a href="login.php">Create an Account</a>
    </form>
</body>
</html>

 <?php
 session_start();
 include("conn.php");
 if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $secondname=$_POST['secondname'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $login=mysqli_query($conn,"SELECT * FROM trainer WHERE firstname='$firstname' AND secondname='$secondname' AND `address`='$address' AND `password`='$password'");
    $count=mysqli_num_rows($login);
    if($count){
   $_SESSION=$_POST['firstname'];
   $_SESSION=$_POST['secondname'];
   $_SESSION=$_POST['address'];
   $_SESSION=$_POST['password'];
header("location:galley.php");
    }
    else{
      echo "<script>alert('Account does not match try to create account');</script>";
    }
 }
 ?>