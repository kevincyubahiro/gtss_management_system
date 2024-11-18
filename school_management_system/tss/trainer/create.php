<!DOCTYPE html>
 <html lang="en">
 <head>

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

        /* Form Styling */
        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Input Fields Styling */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        /* Button Styling */
        .cncl button{
         width: 40%;
            padding: 12px;
            background-color: red;
           
            font-size: 16px;
            border: none;
            border-radius: 5px;
            
         
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        /* Link Styling (optional) */
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="" method="post"auto_completed="off">
      <H2>Create New Account</H2>
<input type="text" name="username"placeholder="username"required><br><br>
<input type="password" name="password"placeholder="password"required><br><br>
<button name="submit">SUBMIT</button><br><br>
<div class="cncl">
<a href="loginn.php"><button >cancel</button></a>
</div>



    </form>
 </body>
 </html>
 <?php
 include("conn.php");
 if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"INSERT INTO trainers VALUES('','$username','$password')");
    if($insert){
    header("location:loginn.php");
    }
    else{
      
      echo "<script>alert('This person Already Exist try to create account');</script>";
      
      
    }
 }
 ?>