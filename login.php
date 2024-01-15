<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "login-style.css">
    <title>Login</title>
</head>
<body>
    <div class = "container">
        <div class = "box form-box">
            <header>Login</header>
            <form action ="" method="post">
                <div class = "field input">
                    <label for = "username">Username</label>
                    <input type = "text" name = "username" id = "username" required>
                </div>
                <div class = "field input">
                    <label for = "password">Password</label>
                    <input type = "text" name = "password" id = "password" required>
                </div>
                <div class = "field">
                    <input type = "submit" class = "btn" name = "submit" value = "Login" required>
                </div>
                <div class = "links">
                    Don't have an account yet? <a href ="register.php">Sign up now</a>
                </div>
            </form>
            
            
        </div>
    </div>
</body>
</html>