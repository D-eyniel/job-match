
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Match Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body, html {
            padding-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f6ef;
            user-select: none;
        }
        .login-container {
            background-color: #f9f6ef;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            border-radius: 70px;
            width: 400px;
            height: 500px;
            border: 10px solid;
            margin-top: -40px;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 40px;
            color: #333;
            font-family: 'monaco', monospace;
            font-size: 30px;
        }
        input[type="text"],
        input[type="password"] {
            width: 320px;
            padding: 12px;
            margin-top: 50px;
            margin-bottom: 10px;
            border: 1px solid;
            box-sizing: border-box;
            border-radius: 30px;
            background-color: #f9f6ef;;
            margin-top: 15px;
            font-family: lucida, monospace;
        }
        button[type="submit"] {
            background-color: #050462;
            color: #f9f6ef;;
            margin-top: 20px;
            border: none;
            text-align: center;
            padding: 10px;
            cursor: pointer;
            font-size: 15px;
            width: 180px;
            height: 37px;
            border-radius: 30px;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
            margin-top: 150px;
            font-family: lucida, monospace;
        }
        a {
            color: black;
            border-color: #0056b3;
            padding: 2px;
            padding-left: 55px;
            padding-right: 55px;
            border-width: 3px;
            border-radius: 12px;
            border-style: double;
            background-color: #f9f6ef;
            font-size: 15px;
            font-family: 'monaco', monospace;
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
            background-color: #ddd;
        }
        #logo {
            position: absolute;
            top: 20px;
            left: 10px;
            width: 200px;
            height: 40px;
        }
    </style>
</head>
<body>
    <img id="logo" src="logo1.png" draggable="false">
    <div class="login-container">
        <h1>Log in to Job Match</h1>
        <form id="login-form" onsubmit="login(event)">
            <input type="text" id="username-or-email" name="username-or-email" required placeholder="Username or Email">
            <input type="password" id="password" name="password" required placeholder="Password">
            <button type="submit" onclick="location.href='logsign.php'">Log In</button>
        </form>
        <p>Don't have a Job Match account?</p>
        <a href="signup.php">Sign Up</a>
    </div>
</body>
</html>
