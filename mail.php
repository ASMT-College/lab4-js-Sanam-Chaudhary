<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
    <style>
        input {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div>
        <form action="">
                <h1>Sign_Up_Form </h1>
                Username: <input type="text" name="username" id="username">
                <br>
                Password: <input type="password" name="password" id="password">
                <br>
                Email: <input type="text" id="email" required>
                <br>
                <input type="submit" onclick="validate()" value="Sign Up">
        </form>
    </div>
    <script>
        function validate() {
            var patt = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,4}$/;
            var v = document.getElementById('email').value;
            if (v.match(patt)) {
                alert("valid email");
            } else {
                alert("invalid email");
                document.getElementById('email').focus();
            }
        }
    </script>
</body>
</html>