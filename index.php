<?php
    include "database.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Mangement System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="back">
    <?php include"navbar2.php"?>
    <img src="img/1.jpg" height="165px" width="800">
    
    <div class="login">
    <h1 class="heading">Admin Login</h1>
    <div class="log">
        <?php
        if(isset($_POST["login"]))
        {
            $sql ="select * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
            $res = $db->query($sql);
            if($res->num_rows>0){
                $ro = $res->fetch_assoc();
                $_SESSION["AID"] =$ro["AID"];
                $_SESSION["ANAME"] =$ro["ANAME"];
                echo "<script>window.open('admin_home.php','_self');</script>";


            }
            else{
                echo "<div class='error'>Invalid username or password</div>";
            }
        }
        
        
        ?>
        <form method ="post"action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label>User Name</label><br>
            <input type="text" name="aname" required class="input"><br><br>
            <label>Password</label>
            <input type="password" name="apass" required class="input"><br>
            <button type="submit" class="btn" name="login">Login Here</button>
        </form>
    </div>
    </div>
    <?php include"footer.php";?>
    
</body>
</html>