<?php
    include"database.php";
    session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subject details</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include"navbar.php";?><br>
    <img src="img/1.jpg" class="sha"><br>
    <div id="section">
    <?php include"sidebar.php";?>
    <br><br><br>
    <h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
    <div class="content1">
        <h3>Add Subject Details</h3><br>
    <?php
    if(isset($_POST["submit"])){
        $sq = "insert into sub(SNAME) values ('{$_POST["sname"]}')";
        if($db->query($sq)){
            echo "<div class='success'>Subject Added Successfully</div>";
        }else{
            echo "<div class='error'>Subject Not Added</div>";
        }
    }
    
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label>Subject Name</label><br>
            <input type="text" name="sname" required class="input">
            <button type="submit" class="btn" name="submit">Add Subject Details</button>
    </form>
    </div>
    <div class="tbox" >
					<h3 style="margin-top:30px;"> Subject Details</h3><br>
                    <?php
                    if(isset($_GET["mes"])){
                            echo "<div class='error'>{$_GET["mes"]}</div>";
                     }
                     ?>
                    <table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Subject Name</th>
							<th>Delete</th>
						</tr>
                        <?php
                        $s = "select * from sub";
                        $res=$db->query($s);
                        if ($res->num_rows>0){
                            $i=0;
                            while($r=$res->fetch_assoc()){
                                $i++;
                                echo"
                                <tr>
                                <td>{$i}</td>
                                <td>{$r["SNAME"]}</td>
                                <td><a href='sub_delete.php?id={$r["SID"]}' class='btnr'>Delete</a></td>
                                
                                
                                
                                </tr>";
                            }

                        }else{
                            echo "No record found";
                        }

                        
                        
                        ?>
                        </table>
				</div>


    </div>
    <?php include"footer.php";?>
</body>
</html>