<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X_UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "login-style.css">
    <title>Change Profile</title>
</head>
<body>
    <div class = "container">
        <div class = "box form-box">
            <header>Change Profile</header>
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
                    <input type = "submit" class = "btn" name = "submit" value = "Update" required>
                </div>
                <div class = "links">
                </div>
            </form>
            
            
        </div>
    </div>
</body>
</html>