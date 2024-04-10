<?php

  $name=$_POST['name'];  
  $dob=$_POST['dob'];
  $mail=$_POST['mail'];
  $phone=$_POST['phone'];
  $qual=$_POST['qual'];
  $res=$_POST['res'];
  $pword=$_POST['pword'];

  $con=mysqli_connect('localhost','root','','ors');

  mysqli_query($con,"insert into applicants(Name,ID,dob,mail,phone,qual,res,pword) values('$name','0','$dob','$mail','$phone','$qual','$res','$pword')");
  header("Location: home.html");
?>