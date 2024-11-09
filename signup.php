<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f6ef;
            user-select: none;
        }

        .container {
            text-align: center;
            margin-top: 65px;
        }

        form {
            height: 420px;
            width: 400px;
            padding: 15px;
        }

        form label,
        form input {
            display: block;
            width: 225px;
            text-align: left;
            padding: 5px 10px;
            margin-left: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        form .fila {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        form .fila label {
            margin-top: -5px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        form .fila input {
            width: 120px; 
            border-radius: 30px;
            height: 21px;
            margin-left: 20px;
            margin-right: 25px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-right: 35px;
            margin-top: 10px;
        }

        form input[type="text"]{
            border: 1px solid ; 
            border-radius: 25px;
            width: 125px; 
            margin-left: 20px;
            margin-top: -10px;
            background-color: #f9f6ef;
        }
        form input[type="email"],
        form input[type="password"]{
            border: 1px solid;
            border-radius: 25px;
            width: 275px;
            margin-left: 50px;
            margin-top: -5px;
            background-color: #f9f6ef;
        }

        form input[type="submit"] {
            margin-top: 20px;
            background-color: #040958;
            padding: 10px 20px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            width: 200px;
            display: flex;
            text-align: center;
            color: aliceblue;
        }

        form input[type="submit"]:hover {
            background-color: #07148b;
        }
        #logo {
            position: absolute;
            top: 20px;
            left: 10px;
            width: 200px;
            height: 40px;
        }
    </style>
    <script>
        function submitForm(event) {
            event.preventDefault();
            const formData = {
                firstname: document.getElementById('firstname').value,
                lastname: document.getElementById('lastname').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value
            };

            fetch('connection.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Account created successfully!');
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</head>
<body>
    <img id="logo" src="logo1.png" draggable="false">
    <div class="container">
        <h1>Sign Up</h1>
        <form onsubmit="submitForm(event)">
            <div class="fila">
                <label for="firstname">First Name</label>
                <label for="lastname">Last Name</label>
            </div>
            <div class="fila">
                <input type="text" id="firstname" name="firstname">
                <input type="text" id="lastname" name="lastname">
            </div>
            <label for="email">Work Email Address</label>
            <input type="email" id="email" name="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password (8 or more characters)">
            <div class="button-container">
                <input type="submit" value="Create Account">
            </div>
            <p>Already have an account? <a href="loginpage.php">Login here</a></p>
        </form>
    </div>
</body>
</html>
