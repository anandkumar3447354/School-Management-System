<?php
    include"database.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff details</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include"navbar.php";?><br>
			<img src="img/1.jpg"  class="sha"><br>
			
			<div id="section">
				
				<?php include"sidebar.php";?><br><br><br>
				
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Staff Details</h3><br>
                        <?php
                        if(isset($_POST["submit"])){
                            {
                                $target="staff/";
                                $target_file=$target.basename($_FILES["img"]["name"]);
                                
                            if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file))
                            {
                            $sq="insert into staff(TNAME,TPASS,QUAL,SAL,PNO,MAIL,PADDR,IMG) values ('{$_POST["sname"]}',1234,'{$_POST["qual"]}','{$_POST["sal"]}','{$_POST["pno"]}','{$_POST["mail"]}','{$_POST["addr"]}','{$target_file}')";
                            if($db->query($sq)){
                                echo "<div class='success'>Insert Success</div>";
                            }else{
                                echo "<div class='error'>Insert Failed</div>";
                            }}
                        }}
                        ?>

                    <form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                        <div style="width:45%;margin-right:40px;float:left;">
                            <label>Staff Name</label><br>
                            <input type="text" name="sname" required class="input3">
                            <br><br>
                            <label>Qualification</label><br>
                            <input type="text" name="qual" required class="input3">
                            <br><br>
                            <label>Salary</label><br>
                            <input type="text" name="sal" required class="input3">
                            <button type="submit" class="btn" name="submit">Add Staff Details</button>
                    </div><br><br>
                            
                    <div class="cbox" style="width:45%;float:left;margin-top:-37px;">
							<label>  Phone No</label><br>
							<input type="text" maxlength="10" required class="input3" name="pno"><br><br>
							<label>  E - Mail</label><br>
							<input type="email"  class="input3" required name="mail"><br><br>
							<label>  Address</label><br>
							<textarea rows="5" name="addr"></textarea><br><br>
							<label> Image</label><br>
							<input type="file"  class="input3" required name="img"><br><br>
                    </div>
						
						</form>
                </div>
           </div>
           <?php include"footer.php";?>
</body>
</html>