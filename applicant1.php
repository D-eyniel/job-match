<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Match</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
        }
        .header a {
            text-decoration: none;
            color: #000;
            margin: 0 20px;
            font-weight: bold;
        }
        .main h2 {
            text-align: center;
            color: #228B22;
            margin-bottom: 20px;
        }
        .logo img {
            position: absolute;
            top: 5px;
            left: 10px;
            width: 300px;
            height: 60px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .job-listing {
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .job-salary {
            font-size: 1em;
            color: #555;
        }
        .job-description {
            margin-bottom: 10px;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
        }
        button {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #00688B;
        }
        .resume-button {
            margin-right: 10px;
            background-color: #4CAF50;
        }
        .resume-button:hover {
            background-color: #367C39;
        }
        .upload-button {
            display: none;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="logo1.png" draggable="false">
    </div>
    <div class="header">
        <div>
            <a href="login-signup.php">JOIN</a>
            <a href="logsign.php">HOME</a>
        </div>
        <div class="user-profile">
            <div class="nav-links">
                <a href="all-jobs.php">All Jobs</a>
                <a href="my-applications.php">My Applications</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
    <h2>Find your job!</h2>
    <div class="container">
        <div class="job-listing">
            <div class="job-header">
                <div class="user-info">
                    <span>Paul Vincent</span>
                </div>
            </div>
            <div class="button-container">
                <input type="file" id="resume-upload" class="upload-button">
                <button class="resume-button" onclick="document.getElementById('resume-upload').click();">Upload Resume</button>
                <button>Apply</button>
            </div>
        </div>

        <div class="job-listing">
            <div class="job-header">
                <div class="user-info">
                    <span>Paul George</span>
                </div>
            </div>
            <div class="button-container">
                <input type="file" id="resume-upload-2" class="upload-button">
                <button class="resume-button" onclick="document.getElementById('resume-upload-2').click();">Upload Resume</button>
                <button>Apply</button>
            </div>
        </div>
    </div>
</body>
</h>