<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "login-style.css">
    <title>Register</title>
</head>
<body>
    <div class = "container">
        <div class = "box form-box">
            <header>Sign Up</header>
            <form action ="" method="post">
                <div class = "field input">
                    <label for = "username">Username</label>
                    <input type = "text" name = "username" id = "username" autocomplete="off" required>
                </div>
                <div class = "field input">
                    <label for = "email">Email</label>
                    <input type = "text" name = "email" id = "email" autocomplete="off" required>
                </div>
                <div class = "field input">
                    <label for = "password">Password</label>
                    <input type = "text" name = "password" id = "password" required>
                </div>
                <div class = "field">
                    <input type = "submit" class = "btn" name = "submit" value = "Login" required>
                </div>
                <div class = "links">
                    Already a member? <a href ="login.php">Sign in</a>
                </div>
            </form>
            
            
        </div>
    </div>
</body>
</html>