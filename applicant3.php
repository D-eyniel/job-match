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
        @keyframes slideIn {
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
            margin-top: 50px;
            padding: 10px;
        }

        .main3 h2 {
            font-size: 45px;
            font-weight: bold;
            margin-top: -125px;
            margin-bottom: 0px;
            margin-left: 5px;
            margin-right: 10px;
            font-family: 'monaco', monospace;
            animation: fadeIn 1.5s ease-in-out;
        }

        .main2 h2 {
            font-size: 24px;
            font-weight: 10;
            margin-top: -50px;
            margin-bottom: 0px;
            margin-left: 5px;
            margin-right: 10px;
            font-family: 'monaco', monospace;
            animation: fadeIn 1.5s ease-in-out;
        }

        .main h2 {
            font-size: 24px;
            font-weight: 10;
            margin-top: 120px;
            margin-bottom: 50px;
            margin-left: 5px;
            margin-right: 10px;
            font-family: 'monaco', monospace;
            animation: fadeIn 1.5s ease-in-out;
        }

        .main button {
            background-color: #002299;
            color: #f9f6ef;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            height: 10x;
            width: 115px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 17px;
            margin-left: -400px;
        }

        .main button:hover {
            background-color: #335df4;
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
            text-align: center;
            margin-top: 334px;
            margin-left: 1150px;
            background-color: #f9f6ef;
            color: #000;
            justify-content: center;
            border: medium#0056b3;
            border-style: double;
            border-radius: 15px;
            cursor: pointer;
            font-family: 'monaco', monospace;
            font-size: 18px;
            height: 35px;
            width: 100px;
            transition: transform 0.3s ease-in-out;
            animation: zoomOut .7s ease-in-out;
        }

        .footer button:hover {
            background-color: #ddd;
        }

        .a1 {
            position: absolute;
            top: 21px;
            display: inline-block;
            z-index: 11;
        }

        .a1 button{
            font-size: 17px;
            border-style: none;
            text-decoration: none;
            background-color: #f9f6ef;
            font-family: 'monaco', monospace;
            transition: transform 0.3s ease-in-out;
            z-index: 4;
        }

        .a1 button:hover {
            transform: scale(1.1);
        }
        .a1 {
            left: 990px;
            animation: slideIn 0.5s ease-in-out;
        }

        .logobig {
            margin-top: -25px;
            margin-left: 390px;
            width: 1px;
            height: 1px;
        }

        .logobig img {
            width: 550px;
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
    </style>
</head>
<body>
    <div class="logo">
        <img src="logo1.png" draggable="false">
    </div>
    <div class="logout">
        <button onclick="location.href='startup.php'" >Log Out</button>
    </div>
    <div class="a1">
        <button onclick="location.href='job4.php'">MY APPLICATIONS</button>
    </div>
    <div class="header">
        <div>
            <button onclick="location.href='logsign.php'">HOME</button>
        </div>
    </div>
    <div class="logobig">
        <img src="logobg.png" draggable="false">
    </div>
    <div class="main">
        <h2>Always check your job inbox if you have</h2>
    </div>
    <div class="main2">
        <h2>been accepted for the job.</h2>
    </div>
    <div class="main3">
        <h2>You have applied for a project!</h2>
    </div>
    <div class="footer">
        <button onclick="location.href='applicant2.php'">Back</button>
    </div>
</body>
</html>
