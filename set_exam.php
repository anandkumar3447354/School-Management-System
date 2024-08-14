<?php
	include"database.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Exam Details</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
        <?php include"navbar.php";?><br>
			<img src="img/1.jpg" class="sha">
			
			<div id="section">
			
					<?php include"sidebar.php";?><br><br><br>
				
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				
				<div class="content">
					
				<h3 >Set Exam Time Table Details</h3><br>

            <?php
                if(isset($_POST["submit"])){
                    $edate =$_POST["da"].'-'.$_POST["mo"].'-'.$_POST["ye"];
                    $sq= "insert into exam(ENAME,ETYPE,EDATE,SESSION,CLASS,SUBJECT) values ('{$_POST["ename"]}','{$_POST["etype"]}','{$edate}','{$_POST["ses"]}','{$_POST["cla"]}','{$_POST["sub"]}')";
                    if($db->query($sq)){

                        echo "<div class='success'>Insert Success</div>";
                    }else{
                        echo "<div class='error'>Insert Failed</div>";
                    }
                } 
            ?>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					<div class="lbox">
						<label> Exam Name</label><br>
							<input type="text" class="input3" name="ename"><br><br>
						<label> Select Term</label><br>
							<select name="etype" required class="input3">
						       <option value="">Select</option>
						       <option value="I-Term">I-Term</option>
						       <option value="II-Term">II-Term</option>
						       <option value="III-Term">III-Term</option>
							</select>
					<br><br>
					
					<label> Exam Date</label><br>
					
					<select name="da" class="input5">
						<option value="">Date</option>
						<option value="1">1 </option>
						<option value="2">2 </option>
						<option value="3">3 </option>
						<option value="4">4 </option>
						<option value="5">5 </option>
						<option value="6">6 </option>
						<option value="7">7 </option>
						<option value="8">8 </option>
						<option value="9">9 </option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
					<select name="mo" class="input5">
						<option> Month</option>
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>
						<option value="07">Jul</option>
						<option value="08">Aug</option>
						<option value="09">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
					<select name="ye" class="input5">
						<option value="">Select Year</option>
						<option value="2018">2038</option>
						<option value="2017">2037</option>
						<option value="2016">2036</option>
						<option value="2015">2035</option>
						<option value="2014">2034</option>
						<option value="2013">2033</option>
						<option value="2012">2032</option>
						<option value="2011">2031</option>
						<option value="2010">2030</option>
						<option value="2009">2029</option>
						<option value="2008">2028</option>
						<option value="2007">2027</option>
						<option value="2006">2026</option>
						<option value="2005">2025</option>
						<option value="2004">2024</option>
						<option value="2003">2023</option>
						<option value="2002">2022</option>
						<option value="2001">2021</option>
					</select>
				</div>
				
				<div class="rbox">
					<label>Session</label>
						<select name="ses" required class="input3">
							<option value="">Select</option>
							<option value="FN">FN</option>
							<option value="AN">AN</option>
						</select>
					<br><br>
					
					
					<label>Class</label><br>
					<select name="cla" required class="input3">
                        <?php
                        $sl = "select DISTINCT(CNAME) from class ";
                        $r = $db->query($sl);
                        if($r->num_rows>0){
                            echo "<option value=''>Select</option>";
                            while($ro=$r->fetch_assoc()){
                                echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
                            }
                        }
                        
                        
                        ?>
                     </select>
                     <br><br>

                     <label >Subject</label>
                     <select name="sub" required class="input3">
                            <?php
                            $s = "select * from sub";
                            $re = $db->query($s);
                            if($re->num_rows>0){
                                echo "<option value=''>Select</option>";
                                while($row=$re->fetch_assoc()){
                                    echo "<option value='{$row["SNAME"]}'>{$row["SNAME"]}</option>";
                                    }
                                
                                }
                            ?>  
                     </select>
                    </div>
					<button type="submit" class="btn" name="submit">Add Exam Details</button>
				</form>
				
				
				</div>
				
				
			</div>
	
			    <?php include"footer.php";?>
</body>
</html>








            