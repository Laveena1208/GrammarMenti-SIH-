<!DOCTYPE html>
<html>

<head>
    <title>Drop-down menu</title>
    <link rel="stylesheet" href="style/Optionsstyle.css" type="text/css" />
    <link rel="stylesheet" href="style/general.css" type="text/css" />
    <!-- <link rel="html" href="nav.html"/> -->
</head>

<body style="background-color: White;">
    <header>
        <nav class="main-nav">
            <input type="checkbox" id="check" />
            <label for="check" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
            <!-- <a href="index.html" class="logo">andraWare</a> -->
            <a href="#"><img src="images/Brandlogo.png" /></a>
            <ul class="navlinks">
                <li><a href="side_nav.php">course</a></li>
                <li><a href="profile.php">profile</a></li>
                <li><a href="course.php">test</a></li>
                <li><a href="index.php" class="contact">signout</a></li>
            </ul>
        </nav>
    </header>
    <body>
        <div class="container">
        <h2 style="text-align: center;">We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</h2>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" style="background-color:#D9B4FF" class="form-control" id="name">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" style="background-color:#D9B4FF" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" style="background-color:#D9B4FF" class="form-control" id="subject">
                </div>

                <div class="col-12">
                    <label for="message" class="form-label">Message</label>
                    <input type="text" style="background-color:#D9B4FF" class="form-control" id="message">
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary" style="background-color:#D9B4FF">Submit</button>
                </div>
            </form>
            <!-- <div class="column">
                <img src="images/Login1.png" alt="login" style="width: 100%" />
            </div> -->
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