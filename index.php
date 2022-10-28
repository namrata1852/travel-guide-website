<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>namrata travel</title>
    <link rel="stylesheet" href="nam.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>
    <header>
        <a href="https://www.travelxp.com/" class="brand">travelxp</a>
        <div class="navigation">
            <div class="navigation-items">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="form.html">Explore</a>
                <a href="#">Gallery</a>
                <a href="contact.html">Contact us</a>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
                <a href="logout.php">Logout</a>


                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
                        </li>
                    </ul>
                </div>




            </div>




        </div>
    </header>
    <section class="home">
        <video class="video-slide active" src="4.mp4" autoplay muted loop></video>
        <video class="video-slide" src="2.mp4" autoplay muted loop></video>
        <video class="video-slide" src="3.mp4" autoplay muted loop></video>
        <div class="content">
            <h1>Let's Make<br><span>Your Best<br> Trip Ever</h1>
            <p>Your adventure expert </p>

        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/namrata_khandagale/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="https://www.travelxp.com/"><i class="fas fa-tv"></i></a>

        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>

        </div>
    </section>

    <script type="text/javascript">
        //javasript for video slider
        const btns = document.querySelectorAll(".nav-btn");
        const slides = document.querySelectorAll(".video-slide");
        var sliderNav = function(manual) {
            btns.forEach((btn) => {
                btn.classList.remove("active");
            });

            slides.forEach((slide) => {
                slide.classList.remove("active");
            });

            btns[manual].classList.add("active");
            slides[manual].classList.add("active");
        }

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                sliderNav(i);
            });

        });
    </script>

    <section class="destiny">
        <div class="content1">
            <h2>Top Destinations</h2>
            <div class="image-container">
                <div class="image">
                    <img src="video/1.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>GREECE</h1>
                        <a href="greece.html">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/2.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>SWITZERLAND</h1>
                        <a href="#">EXPLORE</a>
                    </div>

                </div>
                <div class="image">
                    <img src="video/3.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>PARIS</h1>
                        <a href="explore.html">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/4.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>MALDIVES</h1>
                        <a href="explore.html">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/5.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>DUBAI</h1>
                        <a href="explore.html">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/6.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>ALBEROBELO</h1>
                        <a href="greece.html">EXPLORE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content2">
            <h2>Honeymoon Special</h2>
            <div class="image-container">
                <div class="image">
                    <img src="video/1.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>GREECE</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/2.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>SWITZERLAND</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/3.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>PARIS</h1>
                        <a href="#">EXPLORE</a>
                    </div>

                </div>

                <div class="image">
                    <img src="video/4.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>MALDIVES</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/5.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>DUBAI</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/6.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>ALBEROBELLO</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content3">
            <h2>Perfect for Youngsters</h2>
            <div class="image-container">
                <div class="image">
                    <img src="video/1.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>GREECE</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/2.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>SWITZERLAND</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/3.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>PARIS</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/4.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>MALDIVES</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/5.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>DUBAI</h1>
                        <a href="#">EXPLORE</a>
                    </div>
                </div>
                <div class="image">
                    <img src="video/6.jpg" alt="" width="350" height="250">
                    <div class="details">
                        <h1>ALBEROBELLO</h1>
                        <a href="#">EXPLORE</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <footer>
        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>travelxp</h3>

                <p class="footer-links">
                    <a href="#" class="link-1">Home</a>

                    <a href="#">Blog</a>

                    <a href="#">Pricing</a>

                    <a href="#">About</a>

                    <a href="#">Faq</a>

                    <a href="#">Contact</a>
                </p>
                <p class="footer-company-name">Company Name © 2015</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>444 S.Miracle Ave</span> Solana Beach, California</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+917767994245</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:sudhanawab25@gmail.com">sudhanawab25@gmail.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>


                <div class="footer-icons">

                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>

            </div>

        </footer>
    </footer>
</body>

</html>