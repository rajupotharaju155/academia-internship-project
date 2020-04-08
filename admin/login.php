<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login</title>

    <link rel="stylesheet" href="css/loginstyle.css" type="text/css">
    <script src="https://kit.fontawesome.com/dab8f69f84.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">

    <div class="container">
        <img class="wave" src="img/bg3.png" width=375>
        <div class="img">
            <img src="img/undraw_personalization_triu.svg">
        </div>
        <div class="login-container">
            <form action = "check.php" method="post">
                <img class="avatar" src="img/undraw_profile_pic_ic5t.svg">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class ="i">
<!--                        <img src="img/user.svg">-->
                        <i class="fas fa-user"></i>
                    </div>
                    <div>

                        <input type="text" class="input" placeholder="Username" name="uid" required>
                    </div>

                </div>
                 <div class="input-div two">
                    <div class ="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>

                        <input type="password" class="input" placeholder="Password" name="pass" required>
                    </div>

                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" name="login" value="Login">

            </form>
        </div>
    </div>
 </div>
</body>
</html>
