<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "filmydhaba";

    $con = mysqli_connect($server,$user,$password,$db);
    if(!$con){
        ?>
        <script>
            alert("Connection not successfull");
        </script>
        <?php
    }
?>