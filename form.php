<?php
$insert = false;
if (isset($_POST['Name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this database fail" . mysqli_connect_error());
    }

    $Name = $_POST['Name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $people = $_POST['people'];
    $tourid = $_POST['tourid'];
    $other = $_POST['other'];
    $sql = "INSERT INTO  `travel` . `booktour` (`Name`, `age`, `gender`, `email`, `phone`,  `people`, `tourid`, `other`, `dt`) VALUES ('$Name', '$age', '$gender', '$email', '$phone', '$people', '$tourid','$other', current_timestamp()); ";
    //echo $sql;

    if ($con->query($sql) == true) {
        //echo "Successfukky Inserted";
        $insert = true;
    } else {
        echo "Error: $sql <br> $conn->error";
    }
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nam.css">

</head>

<body>
    <header>
        <a href="https://www.travelxp.com/" class="brand">travelxp</a>
        <div class="navigation">
            <div class="navigation-items">
                <a href="index.php">Home</a>
                <a href="about.html">About</a>
                <a href="form.html">Explore</a>
                <a href="gallery.html">Gallery</a>
                <a href="contact.html">Contact us</a>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <h3>Fill your information</h3>
            <?php
            if ($insert == true) {
                echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining travelxp family</p>";
            } ?>
            <form action="form.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="Name" id="Name" placeholder="Enter your name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" name="age" id="age" placeholder="Enter your Age">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                    </div>

                    <div class="form-group col-md-6">
                        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="no_of_people">Enter no. of people taking tour:</label>
                        <input type="number" name="people" id="people" placeholder="1" step="1" min="1" max="20">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="tourid" id="tourid" placeholder="Enter tour id">
                    </div>
                </div>

                <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
                <button class="btn">Submit</button>
            </form>
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

<script src="index.js"></script>

</body>

</html>