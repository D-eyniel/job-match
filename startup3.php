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
            margin-top: 24px;
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
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
        .profile img{
            position: relative;
            top: 0px;
            margin-bottom: 1px;
            margin-left: 15px;
            width: 80px;
            height: 75px;
        }
        .user{
            text-align: right;
            margin-top: -52px;
            margin-bottom: 0px;
            margin-right: 100px;
            justify-content: space-between;
        }
        .logobig{
            margin-top: 30px;
            margin-left: 620px;
            width: 1px;
            height: 1px;
            animation: fadeIn 1.5s ease-in-out;
        }
        .logobig img{
            height: 450px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="logo1.png" draggable="false">
    </div>
    <div class="profile">
        <img src="profile.png" draggable="false">
    </div>
    <div class="user">
         <span>Paul Vincent</span>
     </div>
    <div class="header">
        <div>
            <button onclick="location.href='logsign.php'">HOME</button>
        </div>
    </div>
    <div class="main">
            <div class="border"name="border"></div>
    </div>
    <div class="logobig">
        <img src="systemlogo.png" draggable="false">
    </div>
    <div class="footer">
        <button onclick="location.href='client3.php'">Back</button>
    </div>
</body>
</html>
