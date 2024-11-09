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
            transition: transform 0.3s ease-in-out;
        }
        .header a {
            text-decoration: none;
            color: #000;    
            margin: 0 20px;
            font-weight: bold;
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
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .main .border {
            position: fixed;
            width: 965px;
            height: 504px;
            padding: 10px;
            margin-left: 85px;
            margin-top: -10px;
            border:10px solid;
            border-style: double;
            border-radius: 1px;
            text-align: left;
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
            margin-top: 429px;
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
        .profile {
            text-align: right;
            margin-top: 0px;
            margin-bottom: 0px;
            margin-right: 190px;
            justify-content: space-between;
        }
        .profile img {
            position: relative;
            top: 0px;
            margin-bottom: 1px;
            margin-left: 15px;
            width: 80px;
            height: 75px;
        }
        .user {
            text-align: right;
            margin-top: -52px;
            margin-bottom: 0px;
            margin-right: 100px;
            justify-content: space-between;
        }
        .logobig {
            margin-top: 30px;
            margin-left: 620px;
            width: 1px;
            height: 1px;
            animation: fadeIn 1.5s ease-in-out;
        }
        .logobig img {
            height: 450px;
        }
        .data1 {
            width: 350px;
            height: 180px;
            padding: 20px;
            z-index: 1;
            border: none;
            text-align: left;
            font-size: 18px;
            margin-left: 50px;
            margin-top: 120px;
            bottom: -20px;
            position: relative;
        }
        .data2 {
            width: 350px;
            height: 180px;
            padding: 20px;
            z-index: 1;
            border: none;
            text-align: left;
            font-size: 18px;
            margin-left: 50px;
            margin-top: -100px;
            bottom: -20px;
            position: relative;
        }
        .data-display {
            position: absolute;
            top: -45px;
            left: 10px;
            background-color: #f9f6ef;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-family: 'Courier New', Courier, monospace;
        }
        .data1 p {
            position: fixed;
            margin-top: -120px;
            left: 140px;
        }
        .data1 button{
            position: inherit;
            left: 150px;
            top: -65px;
            border-radius: 10px;
            width: 100px;
            height: 25px;
            background-color: white;
            border: thin #0056b3;
            border-style: double;
            transition: transform 0.3s ease-in-out;
        }
        .data1 button:hover{
            transform: scale(1.1);
        }
        .data2 button{
            position: inherit;
            left: 150px;
            top: -65px;
            border-radius: 10px;
            width: 100px;
            height: 25px;
            background-color: white;
            border: thin #0056b3;
            border-style: double;
            transition: transform 0.3s ease-in-out;
        }
        .data2 button:hover{
            transform: scale(1.1);
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
        .a1, .a2, .a3, .a4 {
            position: absolute;
            top: 21px;
            display: inline-block;
            z-index: 11;
        }

        .a1 {
            left: 525px;
            animation: slide 1.9s ease-in-out;
        }
        .a2 {
            left: 620px;
            animation: slideIn 1.5s ease-in-out;
        }
        .a3 {
            left: 845px;
            animation: slideIn 1s ease-in-out;
        }
        .a4 {
            left: 980px;
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
        <button onclick="location.href='client1.php'">POST NEW PROJECT</button>
    </div>

    <div class="header">
        <div>
            <button onclick="location.href='logsign.php'">HOME</button>
        </div>
    </div>
    <div class="main">
        <div class="border">
            <div id="data1" class="data1">
                <div class="data-display">Data Display 1</div>
                <p>Applied:</p>
                <button onclick="location.href='applicant4.php'">Details:</button>
            </div>  
            <div id="data2" class="data2">
                <div class="data-display">Data Display 2</div>
            <button onclick="location.href='applicant4.php'">Details:</button>
            </div>
        </div>
    </div>
    <div class="logobig">
        <img src="systemlogo.png" draggable="false">
    </div>
    <div class="footer">
        <button onclick="location.href='client3.php'">Back</button>
    </div>
</body>
</html>
