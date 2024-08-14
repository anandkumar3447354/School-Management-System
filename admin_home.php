<?php
    include "database.php";
    session_start();
    if(!isset($_SESSION["AID"])){
        echo "<script>window.open('index.php?mes =Access denied','_self');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include "navbar.php";?>
    <img src="img/1.jpg" alt="" class="sha">
    <div id="section">
        <?php include"sidebar.php";?>
    <div class="content">
        <h3 class="text">Welcome<?php echo $_SESSION["ANAME"];?></h3><br><hr><br>
        <h3>School Information</h3><br>
        <img src="" alt="">
        <p class="para">hello</p>
    </div>





    </div>
    <?php include"footer.php";?>
</body>
</html>