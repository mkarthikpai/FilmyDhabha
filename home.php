<?php
 session_start();
 if(!isset($_SESSION['username'])){
    ?>
    <script>
        alert("You are logged out");
    </script>
    <?php
     header('location:pdLogin.php');
 }
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style2.css">
  <title>Home Page</title>
</head>

<body>

  <h2 align="center"
    style="background-color: black; color: red;font-size: 40px; font-family: monospace; border: 5px solid blue; border-radius: 10px;">
    UPLOAD DETAILS TO DISPLAY</h2>

  <div class="bg-img">
    <form action="upload.php" method="POST" enctype="multipart/form-data" class="container">
      <h1>Upload Details</h1>

      <label for="username"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="username" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="filmname"><b>Film Name</b></label>
      <input type="text" placeholder="Enter Film Name" name="filmname" required>

      <label for="photo"><b>Upload Poster</b></label>
      <input type="file" placeholder="Insert Image" name="photo" required>

      <button type="submit" name="submit" class="btn">Submit</button>

    </form>
  </div>

  <div class="disp">
    <p>Click this link <a href="display.php">Check Table</a> to look into table once you fill the form, data once
      entered cannot be modified so fill the details carefully. Once your vaccancy is filled and you no longer want to
      advertise mail us at <b>filmydhabha@gmail.com</b> requesting to delete the post and we will do it for you,
      <b>Uploading fake details is punishable under law</b></p>

  </div>

</body>

</html>