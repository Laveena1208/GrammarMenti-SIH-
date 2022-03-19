<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>SIH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="style/login.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="style/login1.css" type="text/css" media="all" />
    <link rel="stylesheet" href="style/nav.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="style/Optionsstyle.css" type="text/css" />
    <link rel="stylesheet" href="style/general.css" type="text/css" />
</head>

<body>
    <div class="content">
    <header>
        <nav class="main-nav">
            <input type="checkbox" id="check" />
            <label for="check" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
            <!-- <a href="index.html" class="logo">andraWare</a> -->
            <a href="#"><img src="images/Brandlogo.png" /></a>
            <ul class="navlinks">
                <li><a href="index.php">About us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
               
            </ul>
        </nav>
    </header>

        <div class="row">
            <div class="column">
                <div class="login_form">
                    <form action="validation.php" method="POST">
                        <br />
                        <h2>Login</h2>
                        <h3>Please login to continue as a user</h3>
                        <input type="text" name="name" placeholder="Username" />
                        <input type="password" name="pwd" placeholder="Password" />
                        <input type="submit" value="Login" />
                        <h4>Don't have an account? <a href="signup.php">Sign Up</a></h4>
                        <br />
                    </form>
                </div>
            </div>
            <div class="column">
                <img src="images/Login1.png" alt="login" style="width: 100%" />
            </div>
        </div>
    </div>


</body>
<!-- Footer -->
<footer>
    <div class="content">
        <div class="middle box">
            <div><a href="login.php">Login</a></div>
        </div>
        <div class="middle box">
            <div><a href="signup.php">Register</a></div>
        </div>
        <div class="middle box">
            <div><a href="feedbackform.php">Feedback</a></div>
        </div>
        <br>
        <div class="bottom">
            <h6>Copyright© 2022 GrammarMenti</h6>
        </div>
</footer>
</html>