<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Provider Login</title>
    <link rel="stylesheet" href="css/style1.css">
    <?php include 'link/links.php' ?>
</head>

<body>

    <?php
        include 'link/dbcon.php';
        if(isset($_POST['submit'])){
            $email =$_POST['email'];
            $password =$_POST['password'];
            $email_search = "select * from pdregistration where email='$email'";
            $query = mysqli_query($con, $email_search);

            $email_count = mysqli_num_rows($query);
            if($email_count){
                $email_pass = mysqli_fetch_assoc($query);
                $db_pass = $email_pass['password'];
                // Getting Username
                $_SESSION['username'] = $email_pass['username'];
                $pass_decode = password_verify($password, $db_pass);
                
                if($pass_decode){
                    ?>
    <script>
        alert("Login Successfull");
        location.replace("home.php");
    </script>
    <?php
                }
                else{
                    ?>
    <script>
        alert("Password Incorrect");
    </script>
    <?php
                }

            }else{
                ?>
    <script>
        alert("Invalid Email");
    </script>
    <?php
            }

        }
    ?>
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Login To Your Provider Account</h4>
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
                    <input name="email" class="form-control" placeholder="Enter email" type="email" required>
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input name="password" class="form-control" placeholder="Enter password" type="password" required>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Login Now</button>
                </div>
                <p class="text-center">Don't have an account? <a href="pdSign.php">Sign Up</a></p>
                <p class="text-center">Logged In as User? <a href="udLogin.php">Click Here</a></p>

            </form>
        </article>
    </div>
</body>

</html>