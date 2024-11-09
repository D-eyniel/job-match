<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Match Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body, html {
            padding-top: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f6ef;
            user-select: none ;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            position: relative;
        }
        .box {
            background-color: #f9f6ef;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: left;
            border-radius: 50px;
            border: 5px solid #565151;
            margin: 0 20px;
            height: 180px;
            width: 280px;
            text-decoration: none;
            color: inherit;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            z-index: 1;
        }
        .box:hover {
        transform: scale(1.05);
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        text-decoration: none;
        }
        .box img {
            transition: transform 0.2s;
        }
        .box:hover img {
            transform: scale(1.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 0px;
            color: #333;
        }
        #logo {
            position: absolute;
            top: 20px;
            left: 10px;
            width: 200px;
            height: 40px;
        }
        .head h1 {
            margin-top:80px;
            position: absolute;
            text-align: center;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
        }
        .client h2, .freelance h2 {
            margin-top: 50px;
            margin-bottom: -40px;
            font-family: "Lucida Console";
            font-size: 20px;
        }
        #client-logo {
            position: absolute;
            top: 10px;
            left: 20px;
            height: 45px;
            width: 65px;
        }
        #freelance-logo {
            position: absolute;
            top: 10px;
            left: 20px;
            height: 55px;
            width: 60px;
        }
        .check-circle {
            position: absolute;
            top: 10px;
            right: 20px;
            width: 30px;
            height: 30px;
            border: 2px solid #000000;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #4CAF50;
            font-size: 20px;
            transition: background-color 0.2s, color 0.2s;
            background-color: transparent;
        }
        .box:hover .check-circle {
            background-color: #4CAF50;
            color: white;
            content: '✔';
        }
    </style>
</head>
<body>
    <img id="logo" src="logo1.png" draggable="false">
    <div class="head">
        <h1>JOIN AS</h1>
    </div>
    <div class="container">
        <a href="client1.php" class="box client">
            <img id="client-logo" src="clientlogo.png" draggable="false">
            <div class="check-circle"></div>
            <h2>I'm an employer,</h2>
            <h2>hiring for a project</h2>
        </a>
        <a href="applicant2.php" class="box freelance">
            <img id="freelance-logo" src="freelancelogo.png" draggable="false">
            <div class="check-circle"></div>
            <h2>I'm a freelancer,</h2>
            <h2>looking for work</h2>
        </a>
    </div>
</body>
</html>
