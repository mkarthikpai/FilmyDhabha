<?php
include 'link/dbcon.php';

if(isset($_POST['submit'])){
    
$username = $_POST['username'];
$email = $_POST['email'];
$filmname = $_POST['filmname'];
$file = $_FILES['photo'];

//print_r($file);
$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if($fileerror == 0){
    $destfile = 'upload/'.$filename;
    //echo"$destfile";
    move_uploaded_file($filepath, $destfile);
    $insertquery = "insert into pdupload(username, email, filmname, photo) values('$username', '$email', '$filmname', '$destfile')";

    $query = mysqli_query($con, $insertquery);

    if ($query) {
        echo"Inserted";
    }
    else{
        echo"Not Inserted";
    }
  
    
    header('location:home.php');
}

}
else{
    echo"No button clicked";
}

?>
