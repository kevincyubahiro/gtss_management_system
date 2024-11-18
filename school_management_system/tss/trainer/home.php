<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Body Styles */
        body {
            background-color: rgb(0, 0, 0);
            color: white;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styles */
        nav {
            background-color: rgb(39, 69, 95);
            height: 60px;
            width: 100%;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Navbar List Styling */
        ul {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        li {
            list-style-type: none;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 10px;
            margin: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: rgb(63, 239, 10); /* Light green on hover */
        }

        /* Login Button Styles */
        .lgt {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 18px;
        }

        .lgt button {
            height: 45px;
            width: 120px;
            background-color: rgb(63, 239, 10);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            color: white;
            transition: background-color 0.3s ease;
        }

        .lgt button:hover {
            background-color: rgb(46, 187, 8); /* Darker green on hover */
        }

        /* Centered Text Styling */
        .txt {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* Image Styling */
        .tss img {
            height: 300px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            ul {
                flex-direction: column;
                align-items: center;
            }

            a {
                font-size: 16px;
                margin: 10px 0;
            }

            .txt h1 {
                font-size: 28px;
            }

            .tss img {
                height: 250px;
                width: 250px;
            }

            .lgt button {
                height: 40px;
                width: 100px;
                font-size: 14px;
            }
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gikonko Technical Secondary School</title>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="nav_bar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Administration</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="insert2.php">Trainer's</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Login Button and Welcome Text -->
    <div class="lgt">
        <button>
            <a href="loginn.php" style="color: white; text-decoration: none;">LOGOUT</a>
        </button>
    </div>

    <div class="txt">
        <h1>Welcome to Gikonko Technical Secondary School (GIKONKO TSS)</h1>
        
        <div class="tss">
            <img src="tss.jpg" alt="Gikonko TSS">
        </div>
    </div>
</body>
</html>
