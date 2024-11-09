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
                transform: translateX(40%);
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
        .logo img {
            position: absolute;
            top: 5px;
            left: 10px;
            width: 300px;
            height: 60px;
        }
        .footer {
            margin-top: 10px;
        }
        .footer button {
            position: absolute;
            margin-top: -50.8px;
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
            animation: zoomOut .7s ease-in-out;
        }
        .footer button:hover {
            background-color: #ddd;
        }
        .profile {
            text-align: right;
            margin-top: 0px;
            margin-bottom: 0px;
            margin-right: 1900px;
            justify-content: space-between;
        }
        .profile img {
            position: relative;
            top: -15px;
            margin-bottom: 1px;
            margin-left: 30px;
            width: 120px;
            height: 115px;
        }
        .user {
            text-align: right;
            margin-top: -88px;
            margin-bottom: 0px;
            margin-right: 930px;
            justify-content: space-between;
            font-weight: 500;
            font-size: 20px;
        }
        .logobig {
            position: fixed;
            margin-top: -569.8px;
            margin-left: 390px;
            width: 1px;
            height: 1px;
            z-index: -1px;
            animation: fadeIn 1s ease-in-out;
        }
        .logobig img {
            width: 550px;
        }
        .data1, .data2, .data3, .data4 {
            position: relative;
            width: 350px;
            height: 180px;
            padding: 20px;
            z-index: 1;
            border: 3px thick #000000;
            border-radius: 1px;
            border-style: double;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: left;
            font-size: 18px;
            margin-left: 180px;
            margin-top: 20px;
        }
        .data3, .data4 {
            margin-left: 700px;
            margin-top: -474px;
        }
        .data4 {
            margin-top: 20px;
        }
        .applicant img {
            position: absolute;
            margin-top: -295px;
            margin-left: -120px;
            width: 50px;
            height: 40px;
            z-index: 1;
            transition: transform 0.2s;
        }
        .applicant img:hover {
            transform: scale(1.1);
        }
        .applicant button {
            position: absolute;
            margin-top: -280px;
            margin-left: -230px;
            font-size: 15px;
            z-index: 5;
            border: none;
            background-color: transparent;
            transition: transform 0.2s;
        }
        .applicant button:hover {
            transform: scale(1.1);
        }
        .applicant a {
            z-index: 6;
        }
        .applicant button:hover {
            cursor: pointer;
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
            z-index: 10;
        }

        .a4 button {
            font-size: 17px;
            border-style: none;
            text-decoration: none;
            background-color: #f9f6ef;
            font-family: 'monaco', monospace;
            transition: transform 0.3s ease-in-out;
        }

        .a4 button:hover {
            transform: scale(1.1);
        }
        .a4 {
            left: 980px;
            animation: slide2 0.5s ease-in-out;
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
    <div class="profile">
        <img src="profile.png" draggable="false">
    </div>
    <div class="user">
        <span>Paul Vincent's Projects</span>
    </div>
    <div id="data1" class="data1"></div>
    <div id="data2" class="data2"></div>
    <div id="data3" class="data3"></div>
    <div id="data4" class="data4"></div>

    <div class="logobig">
        <img src="logobg.png" draggable="false">
    </div>
    <div class="applicant">
        <a href="client4.php">
            <img src="applicant.png" draggable="false">
        </a>
        <button onclick="location.href='client4.php'">See Applicants:</button>
    </div>

    <div class="footer">
        <button onclick="location.href='client1.php'">Back</button>
    </div>

    <script>
        const data1 = localStorage.getItem('input1');
        const data2 = localStorage.getItem('input2');
        const data3 = localStorage.getItem('input3');
        const data4 = localStorage.getItem('input4');

        document.getElementById('data1').innerText = data1 ? 'Data 1: ' + data1 : '';
        document.getElementById('data2').innerText = data2 ? 'Data 2: ' + data2 : '';
        document.getElementById('data3').innerText = data3 ? 'Data 3: ' + data3 : '';
        document.getElementById('data4').innerText = data4 ? 'Data 4: ' + data4 : '';
    </script>
</body>
</html>
