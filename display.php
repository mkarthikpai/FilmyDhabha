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
    <title>Display Page</title>
    <style>
        #users {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 30px;
        }

        #users td,
        #users th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #users tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #users tr:hover {
            background-color: #ddd;
        }

        #users th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            font-size: 30px;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #fc0a0a;
            margin-right: 10px;
        }

    </style>
</head>

<body>
    <div class="container">
        <ul>
            <li><a href="display.php">AVAILABLE  FILM  DETAILS  CONTACT  THEM  SOON</a></li>
            <li style="float:right"><a class="active" href="pdLogout.php">Logout</a></li>
        </ul>
    </div>

    <table id="users">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Film Name</th>
                <th>Film Poster</th>
            </tr>
        </thead>
        <tbody>
            <?php
        include 'link/dbcon.php';
        $selectquery = "select * from pdupload";
        $query = mysqli_query($con, $selectquery);
        //$result = mysqli_fetch_array($query);
        while($result = mysqli_fetch_array($query)){
            ?>

            <tr>
                <td>
                    <?php echo $result['id']; ?>
                </td>
                <td>
                    <?php echo $result['username']; ?>
                </td>
                <td>
                    <?php echo $result['email']; ?>
                </td>
                <td>
                    <?php echo $result['filmname']; ?>
                </td>
                <td><img src="<?php echo $result['photo']; ?>" width="150px" height="135px" alt="poster"></td>
            </tr>
            <?php
        }

    ?>
        </tbody>

    </table>

</body>

</html>