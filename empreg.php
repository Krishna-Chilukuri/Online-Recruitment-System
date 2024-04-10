<?php

  $cname=$_POST['cname'];  
  $name=$_POST['rname'];
  $mail=$_POST['mail'];
  $phone=$_POST['phone'];
  $pos=$_POST['positi'];
  $pword=$_POST['pword'];
  $con=mysqli_connect('localhost','root','','ors');

  mysqli_query($con,"insert into employer (CompName,Name,ID,mail,Phone,Post,pword) values('$cname','$name','0','$mail','$phone','$pos','$pword')");
  header("Location: home.html");
?>