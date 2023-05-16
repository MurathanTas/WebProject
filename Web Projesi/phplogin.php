<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <div class="login">
            <div class="content">
                <img src="image.jpg" alt="">
            </div>
            <div class="loginform">
                <h1>Login</h1>
                <form method="POST" action="<?php echo htmlspecialchars("result.php") ?>">
                    <div class="tbox">
                        <i class="fa fa-user"></i>
                        <input type="email" style="color:aliceblue" name="email" placeholder="Email">
                    </div>
                    <div class="tbox">
                        <i class="fa fa-lock"></i>
                        <input type="password" style="color:aliceblue" name="password" placeholder="Password">
                    </div>
                    <button class="btn">Login</button>
                </form>
                <ul class="social">
                    <li><i class="fa fa-facebook"></i></li>
                    <li><i class="fa fa-twitter"></i></li>
                    <li><i class="fa fa-google"></i></li>

                </ul>
            </div>
        </div>
    </div>
 
</body>
</html>