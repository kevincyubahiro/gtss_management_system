<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        /* Global Reset */
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
            margin: 0;
        }

        /* Form Container Styling */
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Input Fields Styling */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        /* Button Styling */
        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Link Styling */
        a {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Error Message Styling */
        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        /* Responsiveness */
        @media (max-width: 480px) {
            form {
                padding: 20px;
            }

            button {
                font-size: 14px;
            }
        }
    </style>


</head>
<body>
    <form action="" method="post" autocomplete="off" onsubmit="validateForm(event)">
        <h2>Login Form</h2>
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="submit">Login</button><br><br><br>
        <a href="create.php">Create Account</a>

        <!-- Error message container -->
        <div class="error"></div>
    </form>
</body>
</html>

 <?php
 session_start();
 include("conn.php");
 if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $login=mysqli_query($conn,"SELECT * FROM trainers WHERE username='$username'AND `password`='$password'");
    $count=mysqli_num_rows($login);
    if($count){
        $_SESSION=$_POST['username'];
        $_SESSION=$_POST['password'];
        header("location:home.php");
    }  
    else{
        echo"wrong credintail";
    }
 }
 ?>