<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css">
        <title>Signup</title>
    </head>

    <body style="text-align: center; padding-top: 200px">
        <nav class="navbar fixed-top px-sm-5 navbar-expand-sm navbar-dark" style="background-color: black">
            <a href="index.php" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top"
                    src="images/navbar-logo.png" alt="Logo" width="50" height="50" /></a>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link"> Home </a>
                    </li>
                    <!-- linking to home page section on nav bar -->
                    <li class="nav-item active">
                        <a href="men.php" class="nav-link"> Men </a>
                    </li>
                    <!-- linking to men page section on nav bar -->
                    <li class="nav-item active">
                        <a href="women.php" class="nav-link"> Women </a>
                    </li>
                    <!-- linking to women page section on nav bar -->
                    <li class="nav-item active">
                        <a href="equipment.php" class="nav-link"> Equipment </a>
                    </li>
                    <!-- linking to equipment page section on nav bar -->
                    <li class="nav-item active">
                        <a href="login.php" class="nav-link "> Login </a>
                    </li>
                    <!-- linking to login page section on nav bar -->
                    <li class="nav-item active">
                        <a href="signup.php" class="nav-link active"> Signup </a>
                    </li>
                    <!-- linking to signup page section on nav bar -->
                </ul>
            </div>
            <form class="d-flex">
                <input type="text" class="text form-control me-1" />
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
            <li class="nav-item active">
                <a href="index.php" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top mx-3"
                        src="images/user.png" alt="Logo" width="35" height="35"
                        style="padding-left: 5px; padding: right 20px;" /></a>
            </li>
            <li class="nav-item active">
                <a href="" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top mx-3" src="images/cart.png"
                        alt="Cart" width="35" height="35" style="padding-left: 5px; padding: right 20px;" /></a>
            </li>
        </nav>

        <div class="mt-5 text-center">
            <form class="form" action="" style="max-width: 250px; margin: auto">
                <h1 class="h3 mb=3">JOIN NOW</h1>
                <label for="fname"></label>
                <input type="text" class="form-control" id="fname" placeholder="First name" required autofocus>
                <label for="lname"></label>
                <input type="text" id="lname" class="form-control" placeholder="Last name" required>
                <label for="email" class="sr-only"></label>
                <input type="email" class="form-control" id="email" placeholder="Email" required />
                <label for="password"></label>
                <input type="password" placeholder="Password" id="password" class="form-control" required />
                <div class="mt-3">
                    <button class="signupBtn">
                        Signup
                    </button>
                    <p class="pt-3 me-2">Already have an account?</p>
                    <a href="login.php">Login now!</a>
                </div>
                <input type="hidden" name="submitted" value="TRUE" />
            </form>
        </div>
        <!-- Footer -->
        <footer class="text-center text-lg-start text-muted " style="margin-top: 150px; background-color: black;">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="https://en-gb.facebook.com/astonuniversity/" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <p>useful links</p>
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Home</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Products</a>
                            </p>
                            <p>
                                <a href="login.php" class="text-reset">Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Contact Us</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">About Us</a>
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <a href="#" class="fas fa-gem me-3 text-reset">Subscribe Newsletter</a>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="subscribe btm-brdr">
                                        <form>
                                            <input type="email" placeholder="Email" />
                                            <button type="button" class="fill-btn">Subscribe</button>
                                        </form>
                            </h6>
                        </div>

                    </div>
            </section>

            <!-- Copyright -->
            <div class="text-center p-4">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">sports4us.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>

</html>
<style>
form,
input {
    font-family: Basic Commercial, sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #000000;
    transition: color .2s ease-in-out;
    letter-spacing: .2em;
    text-transform: uppercase;
}

.form {
    background-color: white;
    padding: 20px 15px;
    box-shadow: 0px 10px 25px rgba(92, 99, 105, .2);
}

form button {
    background-color: black;
    border: black;
    color: white;
    padding: 10px 88px;
    font-size: 20px;
}

nav,
button {
    font-family: Basic Commercial, sans-serif;
    text-transform: uppercase;
}

footer input {
    margin-top: 25px;
    padding: 5px 53px;
    text-align: left;
}

footer button {
    background-color: grey;
    margin-top: 25px;
}

.signupBtn {
    display: block;
    margin-left: auto;
    padding: 15px 30px;
    background-color: black;
    color: white;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 30px;
    background-color: black;
    border: black;
    color: white;
    padding: 10px 75px;
    font-size: 20px;
}

.signupBtn:hover {
    background-color: grey;
    transform: translateY(-2px);
}

</style>