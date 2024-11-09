<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Match</title>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(0);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes zoomOut {
            from {
                opacity: 0;
                transform: scale(.8);
                transition-duration: 5s;
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes slide2 {
            from {
                transform: translateX(20%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f9f6ef;
            overflow: hidden;
            user-select: none;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            margin-top: 25px;
            background-color: #f9f6ef;
            border-top: 3px solid #050462;
        }
        .header button {
            background-color: #f9f6ef;
            border: none;
            text-decoration: none;
            color: #000;
            margin: 0 20px;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
            font-size: 18px;
            transition: transform 0.3s ease-in-out;
        }
        .header button:hover {
            transform: scale(1.2);
        }
        .main {
            padding: 10px;
        }
        .main h2 {
            font-size: 16px;
            margin-top: 40px;
            margin-bottom: 20px;
            margin-left: 5px;
            margin-right: 1030px;
            font-family: 'monaco', monospace;
        }
        .main textarea {
            width: 550px;
            height: 300px;
            padding: 10px;
            margin-left: -630px;
            margin-bottom: 20px;
            border: 4px solid #000000;
            border-radius: 1px;
            border-style: double;
            resize: none;
            background-color: #f9f6ef;
        }
        .main button {
            position: fixed;
            background-color: #002299;
            color: #f9f6ef;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            height: 25px;
            width: 115px;
            font-family: 'lucida', monospace;
            font-size: 17px;
            margin-left: -180px;
            transition-duration: 0.3s;
        }
        .main button:hover {
            transform: scale(1.1);
        }
        .logo img {
            position: absolute;
            top: 5px;
            left: 10px;
            width: 300px;
            height: 60px;
        }
        .footer {
            margin-top: 20px;
        }
        .footer button {
            position: fixed;
            margin-top: 508px;
            margin-left: 525px;
            background-color: #f9f6ef;
            color: #000;
            justify-content: center;
            border: medium #0056b3;
            border-style: double;
            border-radius: 15px;
            cursor: pointer;
            font-family: 'monaco', monospace;
            font-size: 18px;
            height: 35px;
            width: 100px;
            transition: transform 0.3s ease-in-out;
            animation: zoomOut 0.7s ease-in-out;
        }
        .footer button:hover {
            background-color: #ddd;
        }
        .logout {
            text-align: right;
            z-index: 10;
            position: relative;
        }
        .logout button {
            justify-content: center;
            border-style: 10px solid;
            border-color: #000;
            background-color: #f9f6ef;
            border-radius: 0;
            width: 90px;
            height: 30px;
            margin-top: 15px;
            margin-right: 40px;
            font-family: 'monaco', monospace;
            font-size: 17px;
            transition: transform 0.3s ease-in-out;
        }
        .logout button:hover {
            transform: scale(1.1);
        }
        .a4 {
            position: absolute;
            top: 21px;
            display: inline-block;
            z-index: 11;
        }
        .a4 {
            left: 1010px;
            animation: slide2 0.5s ease-in-out;
        }

        .a1 button, .a2 button, .a3 button, .a4 button {
            font-size: 17px;
            border-style: none;
            text-decoration: none;
            background-color: #f9f6ef;
            font-family: 'monaco', monospace;
            transition: transform 0.3s ease-in-out;
        }

        .a1 button:hover, .a2 button:hover, .a3 button:hover, .a4 button:hover {
            transform: scale(1.1);
        }
        .logobig {
            margin-top: -473px;
            margin-left: 650px;
            width: 1px;
            height: 1px;
            animation: fadeIn 1s ease-in-out;
        }
        .logobig img {
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="logo1.png" draggable="false">
    </div>

    <div class="logout">
        <button onclick="location.href='startup.php'">Log Out</button>
    </div>
    <div class="a4">
        <button onclick="location.href='client3.php'">VIEW PROJECTS</button>
    </div>

    <div class="header">
        <div>
            <button onclick="location.href='logsign.php'">HOME</button>
        </div>
    </div>

    <div class="main">
        <h2>Tell us what you need:</h2>
        <form action="client2.php" method="GET">
            <textarea name="inputText" required></textarea>
            <br>
            <button type="submit">Post</button>
        </form>
    </div>

    <div class="logobig">
        <img src="systemlogo.png" draggable="false">
    </div>

    <div class="footer">
        <button onclick="location.href='client3.php'">Back</button>
    </div>
</body>
</html>
