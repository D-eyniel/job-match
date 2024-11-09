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
                transform: scale(0.1);
                transition-duration: 5s;
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f9f6ef;
            user-select: none;   
            height: auto;
            width: auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            margin-top: 70px;
            background-color: #f9f6ef;
            border-top: 3px solid #050462;
            transition: transform 0.3s ease-in-out;
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
            margin-top: -40px;
        }
        .main h2 {
        padding: none;
        margin-right: 660px;
        margin-left: 50px;
        margin-top: 50px;
        margin-bottom: -40px;
        font-size: 75px;
        font-family: 'monaco', monospace;
        background-color: #f9f6ef;
        animation: fadeIn 2.5s ease-in-out;
        }

        .main h3 {
        font-size: 16px;
        margin-top: 50px;
        margin-bottom: -30px;
        margin-left: 5px;
        margin-right: 620px;
        animation: fadeIn 2.5s ease-in-out;
        font-family: lucida, monospace;
        }
        .main button {
            position: absolute;
            background-color: #002299;
            color: #f9f6ef;
            border: none;
            border-radius: 20px;
            border-style: double;
            cursor: pointer;
            height: 45px;
            width: 170px;
            font-family: 'monaco', monospace;
            font-size: 17px;
            margin-top: 40px;
            margin-left: -395px;
            transition: transform 0.3s ease-in-out;
            animation: zoomOut 1.5s ease-in-out;
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
        .logobig{
            margin-top: -412px; 
            margin-left: 650px;
            width: 1px;
            height: 1px;
            animation: fadeIn 2.5s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="logo1.png" draggable="false">
    </div>
    <div class="header">
        <div>
            <button href="#">ABOUT US</button>
        </div>
    </div>
    <div class="main" draggable="false">
        <h2>Find Your</h2>
        <h2>Dream Job</h2>
        <h2>Today</h2>
            <br>
            <h3>Explore thousands of opportunities</h3>
            <h3>tailored just for you.</h3>
            <br>
            <button onclick="location.href='loginpage.php'">Get Started</button>
    </div>
    <div class="logobig">
        <img src="systemlogo.png" draggable="false">
    </div>
</body>
</html>
