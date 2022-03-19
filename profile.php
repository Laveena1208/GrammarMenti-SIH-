<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="style/profile.css" type="text/css" media="all" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="style/header.css" type="text/css" media="all" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <nav class="navbar navbar-light navbar-expand-md sticky-top" style="
        background-color: #d9b4ff;
        color: black;
        font-family: 'Quando', serif;
      ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img style="height: 60px" src="logo.png" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fs-6 ms-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" href="profile.html">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="side_nav.html">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="course.html">Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="feedbackform.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="profile">
            <img src="images/user.png" />
        </div>
        <div class="details">
            <h5>Name : Drishti</h5>
            <h5>UserId: U123</h5>
            <h5>
                Courses Enrolled: English Grammar Master <br /> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Hindi Grammer Master
            </h5>
            <h5>Rank: 15</h5>
            <h5>Badge: Ulimate Quiz Taker</h5>
        </div>
    </div>
    <table class="center">
        <tr>
            <th>Date</th>
            <th>Course Completed</th>
            <th>Score</th>
        </tr>
        <tr>
            <td>03-02-2022</td>
            <td>Parts of Speech</td>
            <td>90</td>
        </tr>
        <tr>
            <td>10-02-2022</td>
            <td>Verbs & its kind</td>
            <td>75</td>
        </tr>
        <tr>
            <td>22-02-2022</td>
            <td>Modal auxilaries</td>
            <td>60</td>
        </tr>
        <tr>
            <td>09-03-2022</td>
            <td>The Tense</td>
            <td>80</td>
        </tr>
        <tr>
            <td>15-03-2022</td>
            <td>Voice</td>
            <td>50</td>
        </tr>
    </table>
</body>

</html>