<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Gulzar&display=swap');

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: white;
        }

        .login-container {
            display: flex;
            height: 100vh;
        }

        .left-panel {
            flex: 1;
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gambar {
            max-width: 100%;
            height: 100%;
            
        }

        .right-panel {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            text-align: center;
        }

        form {
            width: 100%;
            max-width: 300px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 60px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-family: 'Gulzar', serif;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease; 
        }

        input:hover,
        input:focus {
            outline: none;
            border-color: #96B6C5;
        }

        button {
            width: 100%;
    
            background-color: #96B6C5;
            color: white;
            padding: 4px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease; 
            margin-top: 10px; 
        }

        button:hover {
            background-color: #8EACCD;
        }

        button, a {
            text-align: center;
            text-decoration: none;
            color: #333;
            font-family: 'Gulzar', serif;
        }

        a:hover {
            color: #96B6C5;
        }
    </style>
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <div class="left-panel">
            <img src="../ikan_image/ikan_login.jpg" alt="" class="gambar">
        </div>
        <div class="right-panel">
            <form action="login_session.php" method="post">
                <h2>Login</h2>
                <?php if(isset($_GET['error'])) {?>
                    <p><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label for="email">User Name:</label>
                <input type="text" id="email" name="email" placeholder="Email">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password">

                <button type="submit">Login</button>
                <a href="../register.php" style="margin-top: 10px; color: #96B6C5;">Don't have an account? Register</a>
            </form>
        </div>
    </div>
</body>
</html>
