<?php

  $cname=$_POST['cname'];  
  $pname=$_POST['pname'];
  $qual=$_POST['minqual'];
  $sal=$_POST['sal'];
  $exper=$_POST['exp'];

  $con=mysqli_connect('localhost','root','','ors');

  mysqli_query($con,"insert into ads(cname,pname,ID,salary,experi,mqual) values('$cname','$pname','0','$sal','$exper','$qual')");
  header("Location: employerhome.html");
?>