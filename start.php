<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Get Started</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">Filmy Dhaba</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"> <span
                    class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#provider" class="nav-link">Register As Provider</a>
                    </li>
                    <li class="nav-item">
                        <a href="#user" class="nav-link">Register As User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

    <!-- Provider section -->
    <section id="provider" class="p-5 bg-dark text-light">
        <div class="conatiner">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>Giving An Opportunity</h2>
                    <p class="lead">
                        Register as a <i>PROVIDER</i> is the one who has started any film related works or has a production company and wants technicians.
                    </p>
                    <p>
                        By registering as a provider you get a chance to upload the different kinds of people you want for your films, its basically you are the one's who will upload information looking at which the user may contact depending on their intrests, if provider is involved in any frauds strict actions will be taken.
                    </p>
                    <a href="pdSign.php" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>Register
                    </a>
                </div>
                <div class="col-md">
                    <img src="img/provider.svg" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section>


    <!-- User Section -->
    <section id="user" class="p-5">
        <div class="conatiner">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="img/User.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h2>Grabbing An Opportunity</h2>
                    <p class="lead">
                        Register as a <i>USER</i> is the one who has required skills related to various fields in film making but are not getting a chance to show off the skills.
                    </p>
                    <p>
                        By registering as a user you get a chance to look at the details uploaded by various film production houses in search of candidates for their film, looking at which you can contact them and build your career, Make sure you make small research on the production house because any fraud happened Filmy Dhaba will not be responsible.
                    </p>
                    <a href="udSign.php" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i>Register
                    </a>
                </div>
            </div>

        </div>
    </section>


    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2021 Filmy Dhaba</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>