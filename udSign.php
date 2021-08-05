<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User SigIn</title>
    <link rel="stylesheet" href="css/style1.css">
    <?php include 'link/links.php' ?>
</head>

<body>

    <?php
    include 'link/dbcon.php';
        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

            $pass = password_hash($password, PASSWORD_BCRYPT);
            $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

            // Checking email already exist
            $emailquery = "select * from udregistration where email= '$email'";
            $query = mysqli_query($con,$emailquery);
            $emailcount = mysqli_num_rows($query);

            if($emailcount>0){
                ?>
    <script>
        alert("Email already exists");
    </script>
    <?php
            }else{
                if($password=== $cpassword){
                   $insertquery = "insert into udregistration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

                   $iquery = mysqli_query($con, $insertquery);
                   if($iquery){
                       ?>
    <script>
        alert("Account Created Succesfull, Now Login");
    </script>
    <?php
                        }else{
                        ?>
    <script>
        alert("Not Inserted");
    </script>
    <?php
                        }
                }else{
                    ?>
    <script>
        alert("Passwords are not matching");
    </script>
    <?php
                }
            }
        }

    ?>

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create User Account</h4>
            <p class="text-center">Get Started with your free account</p>
            <p>
                <a href="#" class="btn btn-block btn-gmail"><i class="fa fa-google"></i> Login via Gmail</a>
                <a href="#" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i> Login via Facebook</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input name="username" class="form-control" placeholder="Full Name" type="text" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input type="number" name="mobile" class="form-control" placeholder="Phone number" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Create Password" name="password" value=""
                        required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Repeat Password" name="cpassword" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
                </div>
                <p class="text-center">Have an account? <a href="udLogin.php">Log in</a></p>
            </form>
        </article>
    </div>

    <!-- <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright © 2021 Filmy Dhaba</p>
        </div>
    </footer> -->
</body>

</html>