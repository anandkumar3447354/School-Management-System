<?php
    include"database.php";
    session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Staff details</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include"navbar.php";?><br>
			<img src="img/1.jpg"  class="sha">
				
				<div id="section">
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
					<div class="content1">
					
						<h3 > View Staff Details</h3><br>
						<form id="frm" autocomplete="off">
							<input type="text" id="txt" class="input">
						</form>
						<br>
						<div id="box"></div>
						
					</div>	
				</div>
                <?php include"footer.php";?>
        <script>
           $(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
        </script>
        

</body>
</html>

