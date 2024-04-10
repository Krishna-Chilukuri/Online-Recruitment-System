<?php
  $cname=$_POST['cname'];
  $pname=$_POST['pname'];  
  $qual=$_POST['minqual'];
  $salar=$_POST['sal'];
  $exper=$_POST['exp'];
  $con=mysqli_connect('localhost','root','','ors');
  mysqli_query($con,"insert into ads(CompName,PostName,ID,MinQual,Salary,MinExp) values('$cname','$pname','0','$qual','$salar','$exper')");
  header('Location: employerhome.html');
?>