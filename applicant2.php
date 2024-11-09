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
                transform: translateX(40%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes slide {
            from {
                transform: translateX(170%);
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
        .find h2 {
            text-align: left;
            margin-left: 70px;
            font-weight: 200;
            font-size: 20px;
            margin-top: 5px;
            font-family: 'monaco', monospace;
        }
        .dropdown {
            text-align: left;
            display: inline-block;
            margin-right: -670px;    
        }
        .dropdown button {
            font-size: 20px;
            margin-top: -60px;
            position: absolute;
            border: 1px solid;
            width: 180px;
            height: 30px;
            background-color: #f9f6ef;
            cursor: pointer;    
            z-index: 10;
            font-family: lucida, monospace;
            appearance: none; 
            -webkit-appearance: none;
            -moz-appearance: none; 
        }
        .dropdown button:hover {
            background-color: #ddd;
        }
        .dropdown-content {
            font-family: 'monaco', monospace;
            display: none;
            position: absolute;
            background-color: #f9f6ef;
            min-width: 160px;
            max-height: 400px;
            overflow-y: auto;
            font-size: 20px;
            margin-left: 20px;
            margin-top: -11px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: 'Courier New', Courier, monospace;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .arrow {
            position: relative;
            transform: rotate(90deg);
            -webkit-transform: rotate(180deg);
            top: -71px;
            left: 1145px;
            margin-bottom: -35px;
            font-size: 30px;
            font-weight: -500;
            z-index: 10;
            width: 2px;
            cursor: pointer;
        }
        .show {
            display: block;
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
            position: absolute;
            width: 1020px;
            height: 464px;
            padding: 10px;
            margin-left: 85px;
            margin-top: -50px;
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

        .a1 button:hover{
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
            margin-top: 411.5px;
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
        .data1, .data2 {
            max-width: 350px;
            height: 180px;
            padding: 20px;
            z-index: 1;
            border: 3px thick #000000;
            border-radius: 1px;
            border-style: double;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: left;
            font-size: 18px;
            margin-left: 10px;
            margin-top: 50px;
            position: relative;
        }
        .data-display {
            position: relative;
            top: -60px;
            left: -10px;
            background-color: #f9f6ef;
            padding: 5px 10px;
            border: 1px solid #000;
            border-radius: 5px;
            font-size: 14px;
            font-family: 'Courier New', Courier, monospace;
            z-index: 10;
        }
        .data1-button {
            justify-content: center;
            position: absolute;
            bottom: -5px; 
            left: 420px; 
            width: 95px; 
            height: 25px;
            background-color: #002299;
            color: #f9f6ef;
            padding: 0px 0px; 
            border-radius: 20px; 
            cursor: pointer;
            font-family: 'monaco', monospace;
            font-size: 15px; 
            transition: transform 0.3s ease-in-out;
            border-style: none;
        }
        .data2-button {
            justify-content: center;
            position: absolute;
            bottom: -5px; 
            left: 420px; 
            width: 95px; 
            height: 25px; 
            border-style: none ;
            background-color: #002299;
            color: #f9f6ef;
            padding: 0px 0px; 
            border-radius: 20px; 
            cursor: pointer;
            font-family: 'monaco', monospace;
            font-size: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .data1-button:hover, .data2-button:hover{
            transform: scale(1.1);
        }
        .logobig img{
            height: 450px;
            margin-top: -15px;
            margin-right: 20px;
            position: fixed;
            animation: fadeIn 1s ease-in-out;
            z-index: -1;
        }
        .applicant img{
            position: absolute;
            height: 30px;
            padding: none;
            margin-top: 165px;
            margin-left: 330px;
        }
        .applicant img:hover {
            transform: scale(1.1);
        }
        .applicant button {
            position:absolute;
            margin-top: 175px;
            margin-left: 270px;
            font-size: 15px;
            padding: none;
            z-index: 5;
            border: none;
            font-family: 'monaco', monospace;
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
        .data1 h1, .data2 h1 {
            font-size: 10px;
            margin-top: -30px;
            max-width: 290px;
            height: 200px;
            word-wrap: break-word;
            overflow-wrap: break-word;
            overflow: auto;
            text-overflow: ellipsis;
            appearance: none; 
            -webkit-appearance: none;
            -moz-appearance: none;
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

    <div class="a1">
        <button onclick="location.href='job4.php'">MY APPLICATIONS</button>
    </div>
    <div class="header">
        <div>
            <button onclick="location.href='logsign.php'">HOME</button>
        </div>
    </div>
    
    <div class="find">
        <h2>Find your job!</h2>
    </div>

    <div class="dropdown">
        <button onclick="toggleDropdown()">Categories |</button>
        <div class="dropdown-content">
            <a href="link1.php">I</a>
            <a href="link2.php">M</a>
            <a href="link3.php">I</a>
            <a href="link1.php">S</a>
            <a href="link2.php">S</a>
            <a href="link3.php">Y</a>
            <a href="link1.php">O</a>
            <a href="link2.php">U</a>
            <a href="link2.php">U</a>
            <a href="link2.php">U</a>
            <a href="link2.php">U</a>
        </div>
    </div>

    <div class="arrow">^</div>

    <div class="main">
        <div class="logobig">
            <img src="logobg.png" draggable="false">
        </div>
    
        <div class="footer">
            <button onclick="location.href='logsign.php'">Back</button>
        </div>
    
        <div class="border" draggable="false">
            <div id="data1" class="data1">
                <div class="applicant">
                    <a href="startup2.php">
                        <img src="applicant.png" draggable="false">
                    </a>
                    <button onclick="location.href='startup2.php'">Resume:</button>    
                    </div>
                <div class="data-display">Data Display 1</div>
                <h1 class="content"></h1>
                <button class="data1-button" onclick="location.href='applicant4.php'">Apply</button>
            </div>
            <div class="separator"></div>
            <div id="data2" class="data2">
                <div class="applicant">
                    <a href="startup2.php">
                        <img src="applicant.png" draggable="false">
                    </a>
                    <button onclick="location.href='startup2.php'">Resume:</button>    
                    </div>
                <div class="data-display">Data Display 2</div>
                <h1 class="content"></h1>
                <button class="data1-button" onclick="location.href='applicant4.php'">Apply</button>
    </div>
    <script>
        function toggleDropdown() {
            var dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.classList.toggle('show');
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropdown button')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>
