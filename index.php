<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGC ASSGN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&family=Nunito:wght@600;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- header section -->
    <header>
        <section id="title">
            <nav class="navbar navbar-expand-lg" style="background-color: rgb(245, 108, 29);">
                <img src="./imgs/logo.jpeg" class="navbar-brand" style="height: 90px; width: 90px; margin-left: 20px;">


                <button class="navbar-toggler" type="button" style="margin-right: 20px;" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><strong>HOME</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./static/html/notes.html"><strong>NOTES</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./static/html/assignments.html"><strong>ASSIGNMENTS</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#events"><strong>BLOGS</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./static/html/about.html"><strong>ABOUT US</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./static/html/team.html"><strong>TEAM</strong></a>
                        
                        </li>
                        <nav class="nav-item">
                        <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
                        </nav>
                    </ul>
                </div>
            </nav>
    </header>
    <!-- end of header section -->

    <!-- Main Section -->

    <!-- ====== Carousel(image slider) ====== -->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="home" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('imgs/bg.png');">
                </div>
            </div>
        </div>
    </div>
    <!-- end of carousel -->

    <!-- ======= Programs Section ======= -->
    <section id="programs" class="programs">
        <div class="container my-5">
            <div class="section-title mb-5 text-center">
                <hr class="style-two">
                <h2>Feature</h2>
                <hr class="style-two">
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item">
                        <img src="imgs/program03.jpeg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <h3 style="text-align: center;">Notes</h3>
                            <p style="text-align: center;">Electronics and Communication<br>(1st) || (2nd) || (3rd) ||
                                (4th)<br><br>Computer Science<br>(1st) || (2nd) || (3rd) ||
                                (4th)<br><br>Mechanical<br>(1st) || (2nd) || (3rd) || (4th)<br><br>Information
                                Technology<br>(1st) || (2nd) || (3rd) || (4th)<br><br>BCA<br>(1st) || (2nd) || (3rd) ||
                                (4th)</p>
                        </div>
                        <div class="container mb-3" style="text-align: center;">
                            <a href="./static/html/notes.html" class="btn btn-outline-primary ml-auto">View More</a>
                        </div>
                    </div>
                </div> <!-- End Program Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item">
                        <img src="imgs/program02.jpeg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <h3 style="text-align: center;">Assignments</h3>
                            <p style="text-align: center;">Electronics and Communication<br>4th<br>Computer
                                Science<br>4th<br></p>
                        </div>
                        <div class="container mb-3" style="text-align: center;">
                            <a href="./static/html/assignments.html" class="btn btn-outline-primary ml-auto">View
                                More</a>
                        </div>
                    </div>
                </div> <!-- End Program Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="course-item">
                        <img src="imgs/program01.jpeg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <h3 style="text-align: center;">Placements</h3>
                            <p style="text-align: center;">Electronics and Communication<br>Computer
                                Science<br>Mechanical<br>Information Technology<br>
                            </p>
                        </div>
                        <div class="container mb-3" style="text-align: center;">
                            <a href="" class="btn btn-outline-primary ml-auto">View More</a>
                        </div>
                    </div>
                </div> <!-- End Program Item-->


            </div>
        </div>
    </section>
    <!-- End Program Section -->

    <!-- ====== Events Section ====== -->
    <section id="events" class="events">
        <div class="container my-5">
            <div class="section-title mb-5 text-center">
                <hr class="style-two">
                <h2>Blogs</h2>
                <hr class="style-two">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card eventCard">
                        <div class="card-img">
                            <img src="imgs/events-1.jpg" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href="">Roadmap For Web Development</a></h5>
                            <p class="card-text">Web development is the process of building websites and applications
                                for the internet, or for a private network known as an intranet.Let’s take a look at
                                each of these layers in more detail.</p>
                            <div class="col text-center">
                                <a href="" class="btn btn-outline-primary ml-auto">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card eventCard">
                        <div class="card-img">
                            <img src="imgs/cp.jpg" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href="">Competitive Programming</a></h5>
                            <p class="card-text">Competitive programming mostly refers to coding to make efficient
                                algorithms using appropriate data structures. Although directly they do not have any
                                real life significance but they test the skills of programmers.</p>
                            <div class="col text-center">
                                <a href="" class="btn btn-outline-primary ml-auto">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card eventCard">
                        <div class="card-img">
                            <img src="imgs/backend.jpg" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href="">Backend Developer</a></h5>
                            <p class="card-text">Back-end Development refers to the server-side development. It is the
                                term used for the behind-the-scenes activities that happen when performing any action on
                                a website. </p>
                            <div class="col text-center">
                                <a href="" class="btn btn-outline-primary ml-auto">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card eventCard">
                        <div class="card-img">
                            <img src="imgs/interview.jpg" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title"><a href="">Interview Questions</a></h5>
                            <p class="card-text">The objective of these interview questions is to give you an overview
                                of some of the typical interview questions you can expect during your interview and to
                                help you prepare and get into the right frame of mind.</p>
                            <div class="col text-center">
                                <a href="" class="btn btn-outline-primary ml-auto">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Section -->

    </main>
    <!-- end of main section-->



    <!-- ======= Abour Section ======= -->
    <section id="about" class="about">
        <div class="container my-5">
            <div class="section-title mb-5 text-center mb-5">
                <hr class="style-two">
                <h2>About Us</h2>
                <hr class="style-two">
            </div>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 hover-1 campusImg"><br><br><br>
                    <img src="imgs/logo.jpeg" style="height: 60%; width: 95%; border-radius: 30px;" class="img-fluid"
                        alt="">
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3 style="text-align: center;">We Provide Solutions</h3>
                    <p class="font-italic" style="text-align: center;">
                        We are community of students to help everyone in academics.
                    </p>
                    <ul>
                        <li style="text-align: center;">
                            <h3>Vision</h3>
                            <p>Different student's different minds make a community.<br>Every mind is curious about
                                something</p>
                        </li>
                        <li style="text-align: center;">
                            <h3>Mission</h3>
                            <p>Our mission is to do good things for our college.</p>
                        </li>
                        <li style="text-align: center;">
                            <h3>Values</h3>
                            <p>Quality Notes<br>Free of cost<br>Community Support</p>
                        </li>
                        <li style="text-align: center;">
                            <h3>How can you help?</h3>
                            <p>1. After exam share your question papers with us.<br>2. Share notes with us.<br>3. Share
                                any valuable thing.<br>-Blog || -Tips || -Any new thing.<br>Mail ID: cgcassgn@gmail.com
                            </p>
                        </li>
                        <li style="text-align: center;">
                            <h3>Thank you every one for your support.</h3>
                        </li>
                    </ul><br>
                    <p>
                        Don't forget to give your suggestions for betterment of community.
                    </p>
                    <a href="" style="color: black;"><i class="fab fa-instagram mx-2"></i></a>
                    <a href="" style="color: black;"><i class="fab fa-discord mx-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of About section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container my-5">
            <div class="section-title mb-5 text-center">
                <hr class="style-two">
                <h2>Our Team</h2>
                <hr class="style-two">
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="imgs/1.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Devanshu Kumar</h4>
                            <span>Back-End Developer</span>
                            <p>
                                An investment in knowledge pays the best interest.
                            </p>
                            <div class="social">
                                <!-- <a href=""><i class="fab fa-twitter mx-2"></i></a> -->
                                <a href=""><i class="fab fa-facebook-f mx-2"></i></a>
                                <a href=""><i class="fab fa-instagram mx-2"></i></a>
                                <a href="#"><i class="fab fa-linkedin mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="imgs/2.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Harsh Jindal</h4>
                            <span>Front-End Developer</span>
                            <p>
                                What you do today can improve all your tomorrows.
                            </p>
                            <div class="social">
                                <!-- <a href=""><i class="fab fa-twitter mx-2"></i></a> -->
                                <a href=""><i class="fab fa-facebook-f mx-2"></i></a>
                                <a href=""><i class="fab fa-instagram mx-2"></i></a>
                                <a href="#"><i class="fab fa-linkedin mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="imgs/3.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Aliek Mandel</h4>
                            <span>Developer</span>
                            <p>
                                There is no wealth like knowledge and no poverty like ignorance.
                            </p>
                            <div class="social">
                                <!-- <a href=""><i class="fab fa-twitter mx-2"></i></a> -->
                                <a href=""><i class="fab fa-facebook-f mx-2"></i></a>
                                <a href=""><i class="fab fa-instagram mx-2"></i></a>
                                <a href="#"><i class="fab fa-linkedin mx-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" ">
                    <div class=" member">
                    <img src="imgs/4.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Aakash</h4>
                        <span>Content Creator</span>
                        <p>
                            Education is the key to unlock the Golden door of Freedom.
                        </p>
                        <div class="social">
                            <!-- <a href=""><i class="fab fa-twitter mx-2"></i></a> -->
                            <a href=""><i class="fab fa-facebook-f mx-2"></i></a>
                            <a href=""><i class="fab fa-instagram mx-2"></i></a>
                            <a href="#/"><i class="fab fa-linkedin mx-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="imgs/5.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Akriti</h4>
                        <span>Content Creator</span>
                        <p>
                            A wise person knows that there is something to be learned from everyone.
                        </p>
                        <div class="social">
                            <!-- <a href=""><i class="fab fa-twitter mx-2"></i></a> -->
                            <a href=""><i class="fab fa-facebook-f mx-2"></i></a>
                            <!-- <a href=""><i class="fab fa-instagram mx-2"></i></a> -->
                            <a href="#"><i class="fab fa-linkedin mx-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        </div>
    </section><!-- End Trainers Section -->

    <!-- footer section -->


    <footer class="footer">
        <div class="l-footer">
            <h1>About US
            </h1>
            <p style="color: black">CGC ASSGN is a student community to help everyone in their academics.</p>
            <a href="" style="color: black;"><i class="fab fa-instagram mx-2"></i></a>
            <a href="" style="color: black;"><i class="fab fa-discord mx-2"></i></a>
        </div>
        <ul class="r-footer">
            <li>
                <h1>Contact</h1>
                <p style="color: black">For any queries, feedback feel free to mail us. Our team is always available to
                    help you.
                <p>
                    <a href="#" style="color: black;"><i class="fa fa-envelope "> cgcassgn@gmail.com</i></a>
            </li>
            <li class="features">
                <h1>Our Other Sites</h1>
                <ul class="btn btn">
                    <li><a href="#" style="color: black;">Upaayehai</a></li>
                    <li><a href="#" style="color: black;">FitnessEnquire</a></li>
                </ul>
            </li>
            <li>
                <h1>
                    Work With Us</h1>
                <h2 style="color: black">Provide Notes</h2>
                <h2 style="color: black">
                    Provide assignment Solutions</h2>
                <h2 style="color: black">
                    Be a blog writer</h2>
                <h2 style="color: black">Provide previous year question</h2>
                <h2 style="color: black">Provide any competitive exam study material</h2>
                <h2 style="color: black"><u>Mail us to Join ASSGN team</u></h2>
            </li>

        </ul>
        <div class="b-footer">
            <p style="color: black;">
                ©2021 CGC ASSGN. All Rights Reserved. </p>
        </div>
        <p>
            Powered by Fᴜᴛᴜʀᴇ </p>
    </footer>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
        integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    
</body>

</html>
