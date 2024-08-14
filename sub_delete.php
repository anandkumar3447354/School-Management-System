<?php
 include"database.php";
 session_start();
 $s = "delete from sub where SID={$_GET["id"]}";
 $db->query($s);
 echo "<script>window.open('add_sub.php?msg = Data deleted','_self');</script>";



?>