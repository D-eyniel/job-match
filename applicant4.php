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
        }
        .main h2 {
            font-size: 30px;
            margin-top: 40px;
            margin-bottom: 20px;
            margin-left: 70px;
            margin-right: 10px;
            width: 400px;
            text-align: center;
            font-family: 'Verdana', monospace;
            font-weight: 300;
        }
        .main .border {
            position: absolute;
            width: 970px;
            height: 494px;
            padding: 10px;
            margin-left: 85px;
            margin-top: -10px;
            border: 10px solid;
            border-style: double;
            border-radius: 1px;
            text-align: left;
            overflow: auto;
        }
        .separator {
            border-bottom: 2px solid #000;
            margin: 20px 0;
        }
        .logo img {
            position: absolute;
            top: 5px;
            left: 10px;
            width: 300px;
            height: 60px;
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
        }

        .a1 button:hover {
            transform: scale(1.1);
        }
        .a1 {
            left: 990px;
            animation: slideIn 0.5s ease-in-out;
        }
        .footer {
            margin-top: 20px;
        }
        .footer button {
            position: fixed;
            margin-top: 464px;
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
        .border img{
            height: 60px;
            width: 60px;
            position: fixed;
            margin-top: -10px;
            margin-left: -10px;
        }
        .user {
            position: fixed;
            margin-top: 12px;
            margin-left: 45px;
            font-size: 15px;
        }
        .main h3{
            margin-left: 40px;
            font-size: 17px;
            margin-bottom: 10px;
            font-family: lucida, monospace;
            font-weight: bold;
        }
        .main li{
            max-width: 500px;
            margin-left: 40px;
            font-family: 'monaco', monospace;
        }
        .main h4{
            font-size: 17px;
            margin-left: 50px;
            margin-top: 20px;
            margin-bottom: 10px;
            font-family: lucida, monospace;
        }
        .h5 li{
            max-width: 800px;
            margin-left: 50px;
            font-family: 'monaco', monospace;
        }
        ul.dash-list {
            list-style-type: none;
            padding-left: 0;
        }

        ul.dash-list li {
            position: relative; 
            padding-left: 20px; 
            margin-bottom: 5px;
        }

        ul.dash-list li::before {
            content: "-";
            position: absolute; 
            left: 0;
        }
        ul.h5 {
            list-style-type: none;
            padding-left: 0;
        }

        ul.h5 li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 5px;
        }

        ul.h5 li::before {
            content: "-"; 
            position: absolute; 
            left: 0;
        }
        .logobig img{
           position: fixed;
            left: 680px;
            top: 140px;
            width: 400px;
            z-index: -1;
            animation: fadeIn 1s ease-in-out;
        }
        .main button{
            position: fixed;
            text-align: center;
            background-color: #002299;
            color: #f9f6ef;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            height: 25px;
            width: 115px;
            font-family: 'lucida', monospace;
            font-size: 17px;
            margin-top: 475px;
            margin-left: 315px;
            transition-duration: 0.3s;
            z-index: 2;
        }
        .main button:hover {
            transform: scale(1.1);}
    </style>
</head>
<body>
    <div class="logo">
        <img src="logo1.png">
    </div>

    <div class="logout">
        <button onclick="location.href='startup.php'">Log Out</button>
    </div>
    <div class="a1">
        <button onclick="location.href='job4.php'">MY APPLICATIONS</button>
    </div>
    <div class="header">
        <div>
            <button onclick="location.href='logsign.php'">HOME</button>
        </div>
    </div>
    <div class="main">
        <div class="border">
            <img src="profile.png">
            <span class="user">Paul Vincent</span>
            <h2>Thanks for showing interest at this project.</h2>
            <h3>Key requirements:</h3>
            <ul class="dash-list">
                <li>Creation of an engaging and visually appealing Keynote presentation that lasts about 30 minutes</li>
                <li>Incorporate videos and pictures that support the focus on Hiking,
                 Camping, Fishing, Boating, Crabbing, Geocaching, Pickle Ball, and Quilting, 
                 as these are the specific pastimes I'd like to cover.</li>
            </ul>
            <div>
            <h4>Ideal skills and experience for this project:</h4>
            <ul class="h5">
                <li>Proficiency in Apple Keynote, with a knack for creating 
                    visually appealing and engaging presentations</li>
                <li>Graphic design skills to implement a nature-inspired theme</li>
                <li>Ability to source and integrate relevant videos and images to support the subject matter</li>
                <li>Looking for a freelancer who can deliver a high-quality, 
                    well-researched, and visually captivating presentation that will keep the Study Club engaged.</li>
            </ul>
            </div>
        </div>
        <button onclick="location.href='applicant3.php'">Apply</button>
    </div>

    <div class="footer">
        <button onclick="location.href='applicant2.php'">Back</button>
    </div>
    <div class="logobig">
        <img src="systemlogo.png" draggable="false">
    </div>
</body>
</html>
